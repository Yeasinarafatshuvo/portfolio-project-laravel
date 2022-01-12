<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\About;
use App\Models\Skill;
use App\Models\Banner;

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

    public function about_add()
    {
        return view('backend.about.about_add');
    }

    public function about_view()
    {
        $data['about_data'] = About::all();
        //dd( $data['about_data']['0']['about_me']);
        return view('backend.about.about_view', $data);
    }

    //store about data controller
    public function about_store(Request $request)
    {
        $validate_data = $request->validate([
            'about_me'=>'required'
        ]);

        // dd($request->about_me);

        if($validate_data)
        {
            $about_instance = new About();
            $about_instance->about_me = $request->about_me;
            $save_data = $about_instance->save();

            if($save_data )
            {
                return redirect()->route('about.view')->with('success', 'Successfully, added your description');
            }


        }
    }
    //edit about data
    public function about_edit($id)
    {
        $specefic_about_data = About::find($id);
         //dd($specefic_about_data);
        return view('backend.about.about_edit',compact('specefic_about_data'));
    }

    //update about data
    public function about_update(Request $request, $id)
    {
        $specefic_about_data = About::find($id);

        //validation data
        $validate_data = $request->validate([
            'about_me'=>'required'
        ]);

        // dd($request->about_me);

        if($validate_data)
        {
           
            $specefic_about_data->about_me = $request->about_me;
            $save_data = $specefic_about_data->save();

            if($save_data )
            {
                return redirect()->route('about.view')->with('success', 'Successfully, update your description');
            }


        }

    }

    //skill page view
    public function skill_view()
    {
        $data['skill_data'] = Skill::all();
        // dd($data);
        return view('backend.skill.skill_view', $data);
    }

    //return skill add page
    public function skill_add()
    {
      
        return view('backend.skill.skill_add');
    }

    //store skill
    public function skill_store(Request $request)
    {
        //validate data
        // $validate_data = $request->validate([
        //     'front_skill'=> 'required',
        //     'font_value'=> 'required',
        //     'back_skill'=> 'required',
        //     'back_value' => 'required',        
        // ]);

        // if($validate_data)
        // {
            $skill_instance = new Skill();
            $skill_instance->front_skill = $request->front_skill;
            $skill_instance->font_value = $request->font_value;
            $skill_instance->back_skill = $request->back_skill;
            $skill_instance->back_value = $request->back_value;
            $save_data = $skill_instance->save();

            if($save_data)
            {
                return redirect()->route('skill.view')->with('success', 'Successfully, added your Skills');
            }


        // }

    }

    //skills edit page
    public function skill_edit($id)
    {
        $specefic_edit_data = Skill::find($id);

        return view('backend.skill.skill_edit', compact('specefic_edit_data'));
    }

    //skill update page
    public function skill_update(Request $request, $id)
    {
        $specefic_edit_data = Skill::find($id);
        $specefic_edit_data->front_skill = $request->front_skill;
        $specefic_edit_data->font_value = $request->font_value;
        $specefic_edit_data->back_skill = $request->back_skill;
        $specefic_edit_data->back_value = $request->back_value;
        $save_data = $specefic_edit_data->save();

        if($save_data)
        {
            return redirect()->route('skill.view')->with('success', 'Successfully, updated your Skills');
        }


    }

    //delte skills data
    public function skill_delete($id)
    { 
        $specefic_delete_data = Skill::find($id);
        $delete_data = $specefic_delete_data->delete();

        if($delete_data)
        {
            return redirect()->route('skill.view')->with('success', 'Successfully, deleted your Skills');
        }

    }

    //view banner page
    public function banner_view()
    {
        $data['banners_data'] = Banner::all();
        return view('backend.banner.banner_view', $data);
    }

    //return for adding banner page
    public function banner_add()
    {
        return view('backend.banner.banner_add');
    }

    //store banner data
    public function banner_store(Request $request)
    {
        // dd($request->session()->get('logged_user'));
        //validate data
        $validate_data = $request->validate([
            'skills'=>'required',
            'area'=>'required',
            'cover_photos'=> 'required |image|mimes:jpeg,png,jpg,svg',
        ]);

        // dd($request->file('cover_photos'));

        if($validate_data)
        {
            $banner_instance = new Banner();
            $banner_instance->skills = $request->skills;
            $banner_instance->area = $request->area;
            $banner_instance->profile_id = $request->session()->get('logged_user');

            if($request->file('cover_photos'))
            {
                $file = $request->file('cover_photos');
                $file_name = 'yeasin'.date('YmHi').'.'.$file->extension();
                // dd($file_name);
                $file->move(public_path('backend/images'), $file_name);
                $banner_instance['cover_photos'] =  $file_name;
            }

            $save_data = $banner_instance->save();

            if($save_data)
            {
                return redirect()->route('banner.view')->with('success', 'Successfully, added your Skills');
            }
        }


    }




    


}
