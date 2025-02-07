<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Services\AmadeusService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Amadeus\Client\ResponseException;
use Illuminate\Support\Collection;
use Session;

class HotelSearchController extends Controller
{
    protected $amadeusService;

    public function __construct(AmadeusService $amadeusService)
    {
        $this->amadeusService = $amadeusService;
    }

    public function searchHotel(Request $request)
    {
        //dd($request->all());

        preg_match('/\((.*?)\)/', $request->input('city'), $cityMatches);
        $cityCode = $cityMatches[1];
        $checkInDate = $request->input('checkInDate');
        $checkOutDate = $request->input('checkOutDate');
        $adults = $request->input('adults', 2);
        $roomQuantity = $request->input('roomQuantity', 1);

        $offers = $this->amadeusService->getHotelOffers($cityCode, $checkInDate, $checkOutDate, $adults, $roomQuantity);
        dd($offers);

        return view('frontend.hotelList', compact('offers'));
    }

    public function searchhotelbycity(Request $request)
    {
        //dd($request->all());

        preg_match('/\((.*?)\)/', $request->input('city'), $cityMatches);
        $keyword = $cityMatches[1];
        //dd($keyword);

        try {

            $response = $this->amadeusService->getReferenceDataHotel([
                'keyword' => $keyword,
            ]);

            $data = collect($response['data']);
            $perPage = 10;
            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $currentItems = $data->slice(($currentPage - 1) * $perPage, $perPage)->values();
            $paginatedhotel = new LengthAwarePaginator(
                $currentItems,
                $data->count(),
                $perPage,
                $currentPage,
                ['path' => $request->url(), 'query' => $request->query()]
            );
            //dd($paginatedhotel);
            session(['flight_offers' => $response]);

            //dd($paginatedhotel);

            $totleflight = $response['meta']['count'];
            if ($response) {

                return view('frontend.hotelList', compact('paginatedhotel', 'totleflight'));
            } else {
                return view('frontend.hotelList', compact('paginatedhotel'))->with('error', 'No flights found', 'totleflight');
            }
            //dd($location);
            return response()->json($locations);
        } catch (ResponseException $e) {
            return response()->json(['error' => 'Error fetching locations'], 500);
        }
    }
    public function hotelDetail()
    {
        return view('frontend.hotelDetail');
    }
}
