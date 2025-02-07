<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Car_rental;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CarRentalsController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {
            $data = Car_rental::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('carrentals.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('carrentals.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.carrentals.index');
    }

    public function carrentalstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->carrentals_id) && !empty($request->carrentals_id)) {
            $Car_rental = Validator::make($request->all(), [
                'car_type' => 'required',
                'location' => 'required',
            ]);

            if ($Car_rental->fails()) {
                return redirect()->back()->withErrors($Car_rental)->withInput();
            }
            $Car_rental = Car_rental::find($request->carrentals_id);
            $Car_rental->car_type = $request->car_type;
            $Car_rental->price_per_day = $request->price_per_day;
            $Car_rental->location = $request->location;
            $Car_rental->availability = $request->availability;
            $Car_rental->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $Car_rental->image_url = $imageName;
            }
            $Car_rental->save();
            return redirect()->route('carrentals.index')->with('success', 'CarRentals update successfully.');
        }
    }

    public function carrentaleate()
    {
        return view('admin.carrentals.add');
    }

    public function carrentaledit($id)
    {
        $Car_rentaldata = Car_rental::find($id);
        return view('admin.carrentals.add', compact('Car_rentaldata'));
    }

    public function carrentalstroy($id)
    {
        $Car_rentaldata = Car_rental::find($id);
        if (!$Car_rentaldata) {
            return redirect()->back()->with('error', 'CarRentals Not Found!');
        }
        $Car_rentaldata->delete();
        return redirect()->back()->with('success', 'CarRentals Delete successfully.');
    }
}
