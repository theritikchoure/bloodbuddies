<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Requisition;
use Illuminate\Http\Request;

class RequisitionController extends Controller
{
 
    public function request(Request $request)
    {
        $request->validate([
            'p_name' => 'required',
            'p_age' => 'required',
            'p_gender' => 'required',
            'mobile' => 'required|unique:requisitions',
            'hospital' => 'required',
            'doctor' => 'required',
            'p_city' => 'required',
            'p_disease' => 'required',
            'p_bg' => 'required',
            'unit' => 'required|integer',
            'r_form' => 'required|mimes:jpg,bmp,png,pdf',
        ]);

        $req = new Requisition();

        $req->p_name = $request->p_name;
        $req->p_age = $request->p_age;
        $req->p_gender = $request->p_gender;
        $req->mobile = $request->mobile;
        $req->hospital = $request->hospital;
        $req->doctor = $request->doctor;
        $req->p_city = $request->p_city;
        $req->p_disease = $request->p_disease;
        $req->p_bg = $request->p_bg;
        $req->unit = $request->unit;

        if($request->hasFile('r_form'))
        {
            $image = $request->file('r_form');
            $ext = $image->extension();
            $image_name =time().'.'.$ext;
            $image->move(public_path('images/r_form'), $image_name);
            // $image->storeAs('/public/images', $image_name);

            $req->r_form = $image_name;
        }


        $req->save();

        return redirect('find-donor');

    }

    public function search_donor(Request $request)
    {

        if($request->has('location') & $request->has('p_bg'))
        {
            $location = $request->location;
            $p_bg = $request->p_bg;

            if($p_bg == 'Any')
            {
                $donor = Donor::where('city', 'like', $location)
                            ->where('status', '1')
                            ->orderby('id', 'desc')->get();
            }
            else
            {
                $donor = Donor::where('bg', 'like', '%'.$p_bg.'%')
                                ->where('city', 'like', $location)
                                ->where('status', '1')
                                ->orderby('id', 'desc')->get();
            }
        }
        else
        {
            $donor = Donor::orderBy('id', 'DESC')->get();
        }
        

        return view('find_donors', compact('donor'));
    }

    public function find_donor(Request $request)
    {
        return view('find_donor');
    }

}
