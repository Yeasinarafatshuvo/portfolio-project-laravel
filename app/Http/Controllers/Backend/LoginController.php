<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('backend.login');
    }

    public function registration()
    {
        return view('backend.registration');
    }

    //Admin registration controller
    public function registration_store(Request $request)
    {
        //validate data
        $validateData = $request->validate([
            'user_name' => 'required',
            'user_email' => 'required|email|unique:profiles',
            'user_phone' => 'required',
            'user_photo'=> 'required |image|mimes:jpeg,png,jpg,svg',
            'user_password' => 'required |min:5|max:12',
        ]);

        

        if($validateData)
        {
            $profile_instance = new Profile();
            $profile_instance->user_name = $request->user_name;
            $profile_instance->user_email = $request->user_email;
            $profile_instance->user_password = Hash::make($request->user_password);
            $profile_instance->user_phone = $request->user_phone;

            if($request->file('user_photo'))
            {
                $file = $request->file('user_photo');
                // dd($file);
                $fileName = 'arafat'.date('YmHi').'.'.$file->extension();
                // dd($fileName);
                $file->move(public_path('backend/images'), $fileName );
                $profile_instance['user_photo'] =  $fileName;
            }

            $save = $profile_instance->save();

            if($save)
            {
                return back()->with('success', 'Registration Successfully Added');
            }
            else
            {
                return back()->with('fail', 'Something went wrong, try again later');
            }


        }

    }

    //LoginCheck Controller
    public function check_login(Request $request)
    {
        //validate data first
        $validateData = $request->validate([        
            'user_email' => 'required|email',
            'user_password' => 'required |min:5|max:12',
        ]);

        //check email than return first record of admin 
        $userInfo = Profile::where('user_email', '=', $request->user_email)->first();
         //dd($userInfo->user_password);
        if(!$userInfo)
        {
            return back()->with('fail', "we don't recognize your email address");

        }
        else
        {
            //check password
            if(Hash::check($request->user_password, $userInfo->user_password))
            {
                $request->session()->put('logged_user', $userInfo->id);
                return redirect()->route('admin.dashboard');
            }
            else
            {
                return back()->with('fail', "Incorrect Password");
            }
            
               
            
        }

    }
}


