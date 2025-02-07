<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attraction;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AttractionsController extends Controller
{

    public function index()
    {
        if (\request()->ajax()) {
            $data = Attraction::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('attraction.edit', $row->id) . '" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> <a href="' . route('attraction.destroy', $row->id) . '"  class="btn btn-danger shadow btn-xs sharp" onclick="return confirm(\'Are You Sure Delete This?\')"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.attraction.index');
    }

    public function attractionstore(Request $request)
    {
        //dd($request->all());

        if (isset($request->attraction_id) && !empty($request->attraction_id)) {
            $Attraction = Validator::make($request->all(), [
                'name' => 'required',
                'entry_fee' => 'required',
            ]);

            if ($Attraction->fails()) {
                return redirect()->back()->withErrors($Attraction)->withInput();
            }
            $Attraction = Attraction::find($request->attraction_id);
            $Attraction->name = $request->name;
            $Attraction->entry_fee = $request->entry_fee;
            $Attraction->opening_hours = $request->opening_hours;
            $Attraction->rating = $request->rating;
            $Attraction->contact_details = $request->contact_number;
            $Attraction->description = $request->description;
            $Attraction->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $Attraction->image_url = $imageName;
            }
            $Attraction->save();
            return redirect()->route('attraction.index')->with('success', 'Attraction update successfully.');
        }
    }

    public function carrentaleate()
    {
        return view('admin.attraction.add');
    }

    public function attractionedit($id)
    {
        $Attractiondata = Attraction::find($id);
        return view('admin.attraction.add', compact('Attractiondata'));
    }

    public function attractionstroy($id)
    {
        $Attractiondata = Attraction::find($id);
        if (!$Attractiondata) {
            return redirect()->back()->with('error', 'Attraction Not Found!');
        }
        $Attractiondata->delete();
        return redirect()->back()->with('success', 'Attraction Delete successfully.');
    }
}
