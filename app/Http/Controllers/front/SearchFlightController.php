<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Services\AmadeusService; // Make sure this matches your service namespace
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Amadeus\Client\ResponseException;
use Illuminate\Support\Collection;
use Session;
use DateInterval;
use DateTime;

class SearchFlightController extends Controller
{
    protected $amadeusService;

    public function __construct(AmadeusService $amadeusService)
    {
        $this->amadeusService = $amadeusService;
    }

    public function searchFlights(Request $request)
    {
        //dd($request->all());

        $myorigin = $request->input('origin');
        $mydestination = $request->input('destination');
        $myTrip = $request->input('Trip');
        // Validate input data
        $request->validate([
            'origin' => 'required',
            'destination' => 'required',
        ]);

        preg_match('/\((.*?)\)/', $request->input('origin'), $originMatches);
        preg_match('/\((.*?)\)/', $request->input('destination'), $destinationMatches);

        if (isset($originMatches[1]) && isset($destinationMatches[1])) {
            $origin = $originMatches[1];
            $destination = $destinationMatches[1];
        } else {
            return back()->with('error', 'Invalid origin or destination format.');
        }

        $departureDate = $request->input('departure_date');
        $adults = $request->input('adults');

        // Call the service to search for flights
        $flights = $this->amadeusService->searchFlights($origin, $destination, $departureDate, $adults);
        //dd($flights);
        $data = collect($flights['data']);
        $perPage = 10;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $data->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginatedFlights = new LengthAwarePaginator(
            $currentItems,
            $data->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        session(['flight_offers' => $flights]);
        $totleflight = $flights['meta']['count'];
        if ($flights) {

            return view('frontend.flightList', [
                'flights' => $paginatedFlights,
                'myorigin' => $myorigin,
                'mydestination' => $mydestination,
                'departureDate' => $departureDate,
                'myTrip' => $myTrip,
                'totleflight' => $totleflight
            ]);
        } else {
            return view('frontend.flightList', compact('myorigin', 'mydestination', 'departureDate', 'myTrip'))->with('error', 'No flights found', 'totleflight');
        }
    }

    public function convertIsoDurationToTime($isoDuration)
    {
        preg_match('/PT(\d+)H(\d+)M/', $isoDuration, $matches);

        $hours = isset($matches[1]) ? (int)$matches[1] : 0;
        $minutes = isset($matches[2]) ? (int)$matches[2] : 0;
        return sprintf('%02d:%02d', $hours, $minutes);
    }

    public function flightsdetals($offerId)
    {
        $flightOffers = session('flight_offers');

        $flightDetails = collect($flightOffers['data'])->firstWhere('id', $offerId);

        $duration = $flightDetails['itineraries'][0]['duration'];
        $convertedTime = $this->convertIsoDurationToTime($duration);
        //dd($convertedTime);

        if (!$flightDetails) {
            return redirect()->back()->withErrors(['message' => 'Flight details not found.']);
        }

        return view('frontend.flightDetails', compact('flightDetails', 'convertedTime'));
    }

    public function searchLocations(Request $request)
    {
        $keyword = $request->input('keyword');
        //dd($keyword);

        try {

            $response = $this->amadeusService->getReferenceDataLocations([
                'subType' => 'CITY,AIRPORT',
                'keyword' => $keyword,
            ]);

            $locations = [];
            if (!empty($response['data'])) {
                foreach ($response['data'] as $location) {
                    $locations[] = [
                        'name' => $location['name'],
                        'iataCode' => $location['iataCode'],
                        'countryName' => $location['address']['countryName'] ?? '',
                    ];
                }
            }

            //dd($location);
            return response()->json($locations);
        } catch (ResponseException $e) {
            return response()->json(['error' => 'Error fetching locations'], 500);
        }
    }
}
