<?php

namespace App\Http\Controllers;
use App\Models\Donor;
use App\Models\Requisition;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class DonorController extends Controller
{
    public function index()
    {
        return view('donor');
    }

    public function add(Request $request)
    {
        $donor = new Donor();

        $donor->email = $request->email;
        $donor->password = Hash::make($request->password);
        $donor->name = $request->name;
        $donor->bg = $request->bg;
        $donor->gender = $request->gender;
        $donor->age = $request->age;
        $donor->mobile = $request->mobile;
        $donor->address = $request->address;
        $donor->city = $request->city;
        $donor->state = $request->state;
        $donor->zip_code = $request->zip;

        $donor->donated_date = date('Y-m-d H:i:s');

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name =time().'.'.$ext;
            $image->move(public_path('images/donor'), $image_name);
            // $image->storeAs('/public/images', $image_name);

            $donor->image = $image_name;
        }

        $donor->save();

        return back();

    }


    public function login()
    {
        return view('donor.login');
    }

    public function login_check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password'=> 'required',
        ]);

        $donorInfo = Donor::where('email', '=', $request->email)->first();

        if(!$donorInfo)
        {
            return back()->with('fail', 'Credentials Are Wrong, Try Again With Right Credentials!!');
        }
        else
        {
            if(Hash::check($request->password, $donorInfo->password))
            {
                $request->session()->put('LoggedDonor', $donorInfo->id);
                return redirect('donor/dashboard');
            }
            else
            {
                return back()->with('fail', 'Credentials Are Wrong, Try Again With Right Credentials!!');
            }
        }

        
    }

    public function dashboard()
    {
       
        if(session()->has('LoggedDonor'))
        {
            $donor = Donor::where('id', '=', session('LoggedDonor'))->first();
            $data = [
                'LoggedDonorInfo' =>$donor
            ];

        }

    
        return view('donor.dashboard', compact('data', 'donor'));
    }

    public function profile_edit()
    {
        if(session()->has('LoggedDonor'))
        {
            $donor = Donor::where('id', '=', session('LoggedDonor'))->first();
            $data = [
                'LoggedDonorInfo' =>$donor
            ];
        }

        return view('donor.profile_edit', compact('donor'));
    }

    public function profile_update(Request $request, $id)
    {
        $donor = Donor::find($id);

        $donor->email = $request->email;
        $donor->name = $request->name;
        $donor->bg = $request->bg;
        $donor->gender = $request->gender;
        $donor->age = $request->age;
        $donor->mobile = $request->mobile;
        $donor->address = $request->address;
        $donor->city = $request->city;
        $donor->state = $request->state;
        $donor->zip_code = $request->zip_code;

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name =time().'.'.$ext;
            $image->move(public_path('images/donor'), $image_name);
            // $image->storeAs('/public/images', $image_name);

            $donor->image = $image_name;
        }
        else
        {
            $donor->image = $donor->image;
        }

        $donor->save();

        return redirect('donor/dashboard');
    }

    public function donated(Request $request)
    {
        $mobile = $request->mobile;
        $patient = Requisition::where('mobile', $mobile)->first();

        if($patient->count() < 1)
        {
            $failed = "Data not found";
        }
        else
        {
            $patient->status = 0;
            $patient->save();
        }

        if(session()->has('LoggedDonor'))
        {
            $donor = Donor::where('id', '=', session('LoggedDonor'))->first();
            
            $donor->status = 0;
            $donor->donated_date = date('Y-m-d H:i:s');
            $donor->save();
        }

        $update = DB::table('donor_requisition')->insert([
            'donor_id' => $donor->id,
            'requisition_id' => $patient->id
        ]);


        return back();

    }

    public function logout()
    {
        if(session()->has('LoggedDonor'))
        {
            session()->pull('LoggedDonor');
            return redirect('/donor/login')->with('success', 'Logout Successfully');
        }
    }
}
