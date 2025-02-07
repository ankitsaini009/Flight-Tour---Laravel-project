<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel_booking;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HotelBookingController extends Controller
{
    public function index()
    {
        if (\request()->ajax()) {
            $data = Hotel_booking::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('hotel.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('hotel.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.hotel_booking.index');
    }

    public function hotelstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->hotel_id) && !empty($request->hotel_id)) {
            $Hotel_booking = Validator::make($request->all(), [
                'hotel_name' => 'required',
                'address' => 'required',
            ]);

            if ($Hotel_booking->fails()) {
                return redirect()->back()->withErrors($Hotel_booking)->withInput();
            }
            $Hotel_booking = Hotel_booking::find($request->hotel_id);
            $Hotel_booking->hotel_name = $request->hotel_name;
            $Hotel_booking->price_per_night = $request->price_per_night;
            $Hotel_booking->location = $request->location;
            $Hotel_booking->description = $request->description;
            $Hotel_booking->rating = $request->rating;
            $Hotel_booking->amenities = $request->amenities;
            $Hotel_booking->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $Hotel_booking->image_url = $imageName;
            }
            $Hotel_booking->save();
            return redirect()->route('hotel.index')->with('success', 'Booking update successfully.');
        }
    }

    public function hotelcreate()
    {
        return view('admin.hotel_booking.add');
    }

    public function hoteledit($id)
    {
        $Hotel_bookingdata = Hotel_booking::find($id);
        return view('admin.hotel_booking.add', compact('Hotel_bookingdata'));
    }

    public function hoteldestroy($id)
    {
        $Hotel_bookingdata = Hotel_booking::find($id);
        if (!$Hotel_bookingdata) {
            return redirect()->back()->with('error', 'Booking Not Found!');
        }
        $Hotel_bookingdata->delete();
        return redirect()->back()->with('success', 'Booking Delete successfully.');
    }
}
