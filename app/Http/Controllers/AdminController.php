<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\DonorRequisition;
use App\Models\Requisition;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
    public function register()
    {
        return view('admin.register');
    }

    public function admin_register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'image' => 'required',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time().'.'.$ext;
            $image->move(public_path('images/admin'), $image_name);

            $user->image = $image_name;
        }

        $save = $user->save();

        return back();

    }

    public function login()
    {
        return view('admin.login');
    }

    public function login_check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password'=> 'required',
        ]);

        $adminInfo = User::where('email', '=', $request->email)->first();

        if(!$adminInfo)
        {
            return back()->with('fail', 'Credentials Are Wrong, Try Again With Right Credentials!!');
        }
        else
        {
            if(Hash::check($request->password, $adminInfo->password))
            {
                $request->session()->put('Loggedadmin', $adminInfo->id);
                return redirect('admin/dashboard');
            }
            else
            {
                return back()->with('fail', 'Credentials Are Wrong, Try Again With Right Credentials!!');
            }
        }
    }

    public function dashboard()
    {
        $donor = Donor::orderBy('id', 'DESC')->limit(5)->get();

        $requests = Requisition::orderBy('id', 'DESC')->limit(5)->get();

        return view('admin.dashboard', compact('donor', 'requests'));
    }

    public function logout()
    {
        if(session()->has('Loggedadmin'))
        {
            session()->pull('Loggedadmin');
            return redirect('/admin/login')->with('success', 'Logout Successfully');
        }
    }

    public function change_password()
    {
        return view('admin.change_password');
    }

    public function change_password_update(Request $request)
    {
        $old = $request->old_pass;
        $new = $request->new_pass;

        if(session()->has('Loggedadmin'))
        {
            $admin = User::where('id', '=', session('Loggedadmin'))->first();
            

            if(Hash::check($old, $admin->password))
            {
                $admin->password = Hash::make($request->new_pass);
                $admin->save();
                return back()->with('success', 'Password is changed!!');
            }
            else
            {
                return back()->with('fail', 'Current Password is Wrong, Try Again With Right Password!!');
            }
        }


    }

    public function donors()
    {
        $donor = Donor::orderBy('id', 'DESC')->get();
        return view('admin.donors', compact('donor'));
    }

    public function donors_delete($id)
    {
        $donor = Donor::find($id);
        $deleted = $donor->delete();

        if($deleted)
        {
            return back()->with('success', 'Donor Deleted!!');
        }
    }

    public function donors_add()
    {
        return view('admin.donors_add');
    }

    public function donors_save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:donors,email',
            'password'=> 'required',
            'age' => 'required|integer',
            'bg' => 'required',
            'gender' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required|integer',
            'mobile' => 'required|integer',
        ]);

        $donor = new Donor();

        $donor->name = $request->name;
        $donor->email = $request->email;
        $donor->password = Hash::make($request->password);
        $donor->mobile = $request->mobile;
        $donor->age = $request->age;
        $donor->bg = $request->bg;
        $donor->gender = $request->gender;
        $donor->address = $request->address;
        $donor->city = $request->city;
        $donor->state = $request->state;
        $donor->zip_code = $request->zip_code;
        $donor->donated_date = Carbon::now()->toDateTimeString();;

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time().'.'.$ext;
            $image->move(public_path('images/donor'), $image_name);

            $donor->image = $image_name;
        }

        $save = $donor->save();

        return back();
    }

    public function donors_details($id)
    {
        $donor = Donor::find($id);

        
            return view('admin.donors_details', compact('donor'));
        

        
    }




    public function requests()
    {
        $requests = Requisition::orderBy('id', 'DESC')->get();       
        

        return view('admin.requests', compact('requests'));
    }

    public function requests_delete($id)
    {
        $request = Requisition::find($id);
        $deleted = $request->delete();

        if($deleted)
        {
            return back()->with('success', 'Request Deleted!!');
        }
    }
}
