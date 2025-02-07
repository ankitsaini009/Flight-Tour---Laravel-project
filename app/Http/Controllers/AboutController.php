<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manage_about;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function aboutupdate(Request $request)
    {
        //dd($request->all());

        if (isset($request->Manage_abouts_id) && !empty($request->Manage_abouts_id)) {
            $validator = Validator::make($request->all(), [
                'mission_statement' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $Manage_about = Manage_about::find($request->Manage_abouts_id);
            $Manage_about->mission_statement = $request->mission_statement;
            $Manage_about->contact_email = $request->contact_email;
            $Manage_about->contect_phone = $request->contect_phone;
            $Manage_about->other_details = $request->other_details;
            $Manage_about->save();

            return redirect()->route('manage_about.show')->with('success', 'Abouts update successfully.');
        } else {
            return redirect()->route('manage_about.show')->with('error', 'Abouts not updated.');
        }
    }

    public function aboutShow()
    {
        $Manage_about = Manage_about::first();
        return view('admin.manage_about.add', compact('Manage_about'));
    }
}
