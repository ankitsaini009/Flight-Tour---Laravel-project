<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airport_taxi;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AirportTexisController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {
            $data = Airport_taxi::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('airportTaxis.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('airportTaxis.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.airportTaxis.index');
    }

    public function airportTexistore(Request $request)
    {
        //dd($request->all());

        if (isset($request->airportTaxis_id) && !empty($request->airportTaxis_id)) {
            $Airport_taxi = Validator::make($request->all(), [
                'taxi_company_name' => 'required',
                'contact_number' => 'required',
            ]);

            if ($Airport_taxi->fails()) {
                return redirect()->back()->withErrors($Airport_taxi)->withInput();
            }

            $Airport_taxi = Airport_taxi::find($request->airportTaxis_id);
            $Airport_taxi->taxi_company_name = $request->taxi_company_name;
            $Airport_taxi->contact_number = $request->contact_number;
            $Airport_taxi->price_per_km = $request->price_per_km;
            $Airport_taxi->availability_status = $request->availability;
            $Airport_taxi->vehicle_type = $request->vehicle_type;
            $Airport_taxi->description = $request->description;
            $Airport_taxi->status = $request->status;
            $Airport_taxi->save();
            return redirect()->route('airportTaxis.index')->with('success', 'Airport Taxi update successfully.');
        }
    }

    public function airportTexiedit($id)
    {
        $Airport_taxidata = Airport_taxi::find($id);
        return view('admin.airportTaxis.add', compact('Airport_taxidata'));
    }

    public function airportTexistroy($id)
    {
        $Airport_taxidata = Airport_taxi::find($id);
        if (!$Airport_taxidata) {
            return redirect()->back()->with('error', 'Airport Taxi Not Found!');
        }
        $Airport_taxidata->delete();
        return redirect()->back()->with('success', 'Airport Taxi Delete successfully.');
    }
}
