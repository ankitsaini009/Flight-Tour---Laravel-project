<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flights_bookin;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FlightBookingController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {
            $data = Flights_bookin::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('flight.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('flight.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.flight_booking.index');
    }

    public function flightstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->flight_id) && !empty($request->flight_id)) {
            $Flights_bookin = Validator::make($request->all(), [
                'airline_name' => 'required',
                'origin' => 'required',
                'destination' => 'required',
            ]);

            if ($Flights_bookin->fails()) {
                return redirect()->back()->withErrors($Flights_bookin)->withInput();
            }
            $Flights_bookin = Flights_bookin::find($request->flight_id);
            $Flights_bookin->airline_name = $request->airline_name;
            $Flights_bookin->departure_time = $request->departure_time;
            $Flights_bookin->arrival_time = $request->arrival_time;
            $Flights_bookin->origin = $request->origin;
            $Flights_bookin->destination = $request->destination;
            $Flights_bookin->duration = $request->duration;
            $Flights_bookin->status = $request->status;
            $Flights_bookin->save();
            return redirect()->route('flight.index')->with('success', 'Booking update successfully.');
        }
    }

    public function flightcreate()
    {
        return view('admin.flight_booking.add');
    }

    public function flightedit($id)
    {
        $Flights_bookindata = Flights_bookin::find($id);
        return view('admin.flight_booking.add', compact('Flights_bookindata'));
    }

    public function flightdestroy($id)
    {
        $Flights_bookindata = Flights_bookin::find($id);
        if (!$Flights_bookindata) {
            return redirect()->back()->with('error', 'Booking Not Found!');
        }
        $Flights_bookindata->delete();
        return redirect()->back()->with('success', 'Booking Delete successfully.');
    }
}
