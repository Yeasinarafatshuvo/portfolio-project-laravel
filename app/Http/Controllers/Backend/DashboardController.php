<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class DashboardController extends Controller
{
    public function admin_dashboard()
    {
        return view('backend.dashboard');
    }

    

    public function profile_view()
    {
        $data['profile_data'] = Profile::all();
        // dd($data['profile_data']['0']['user_name']);
        return view('backend.profile.profile_view', $data);

    }


}
