<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\About;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
class HomeController extends Controller
{
    public function index()
    {
        $data['all_banner_data'] = Banner::all();
        $data['all_about_data'] = About::all();
        $data['all_skill_data'] = Skill::all();
        //fetch data without null value 
        $data['all_backend_data'] = Skill::whereNotNull('back_skill')->get();
        // dd($data['all_backend_data'] );
        $data['all_experience_data'] = Experience::all();
        $data['all_education_data'] = Education::all();
        return view('frontend.layouts.app', $data);
    }

}
