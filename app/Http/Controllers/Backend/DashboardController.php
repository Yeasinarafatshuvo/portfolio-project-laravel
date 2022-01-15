<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\About;
use App\Models\Skill;
use App\Models\Banner;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;

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
                return redirect()->route('banner.view')->with('success', 'Successfully, added your Banner');
            }
        }


    }

    //return edit banner page
    public function banner_edit($id)
    {
        $banner_specefic_data = Banner::find($id);
        return view('backend.banner.banner_edit', compact('banner_specefic_data'));

    }

    //udpate edit data
    public function banner_update(Request $request, $id)
    {
        $banner_specefic_data = Banner::find($id);

         //validate data
         $validate_data = $request->validate([
            'skills'=>'required',
            'area'=>'required',         
        ]);

        if($validate_data)
        {
            $banner_specefic_data->skills = $request->skills;
            $banner_specefic_data->area = $request->area;
            $banner_specefic_data->profile_id = $request->session()->get('logged_user');

            if($request->file('cover_photos'))
            {
                $file = $request->file('cover_photos');
                @unlink(public_path('backend/images/'.$banner_specefic_data->cover_photos));
                $file_name = 'yeasin'.date('YmHi').'.'.$file->extension();
                // dd($file_name);
                $file->move(public_path('backend/images'), $file_name);
                $banner_specefic_data['cover_photos'] =  $file_name;
            }

            $save_data = $banner_specefic_data->save();

            if($save_data)
            {
                return redirect()->route('banner.view')->with('success', 'Successfully, update your banners');
            }


        }

    }

    //educaiton view page
    public function education_view()
    {
        $data['education_data'] = Education::all();
        return view('backend.education.education_view', $data);
    }

    //return page for adding education data
    public function education_add()
    {
        return view('backend.education.education_add');
    }

    //store education data
    public function education_store(Request $request)
    {
        //validation data
        $validate_data = $request->validate([
            'edu_organization'=>'required',
            'edu_level'=>'required',
            'passing_year'=>'required',
            'result'=>'required',
        ]);

        if($validate_data)
        {
            $education_instance = new Education();
            $education_instance->edu_organization = $request->edu_organization;
            $education_instance->edu_level = $request->edu_level;
            $education_instance->passing_year = $request->passing_year;
            $education_instance->result = $request->result;
            $save_data = $education_instance->save();

            if($save_data)
            {
                return redirect()->route('education.view')->with('success', 'Successfully, Added your educations');

            }
        }
    }

    //return page for edit
    public function education_edit($id)
    {
        $find_specefic_education_data = Education::find($id);
        return view('backend.education.education_edit', compact('find_specefic_education_data'));
    }

    //update education data
    public function education_update(Request $request, $id)
    {
        $find_specefic_education_data = Education::find($id);
        //validation data
        $validate_data = $request->validate([
            'edu_organization'=>'required',
            'edu_level'=>'required',
            'passing_year'=>'required',
            'result'=>'required',
        ]);

        if($validate_data)
        {
            $find_specefic_education_data->edu_organization = $request->edu_organization;
            $find_specefic_education_data->edu_level = $request->edu_level;
            $find_specefic_education_data->passing_year = $request->passing_year;
            $find_specefic_education_data->result = $request->result;
            $save_data = $find_specefic_education_data->save();

            if($save_data)
            {
                return redirect()->route('education.view')->with('success', 'Successfully, Updated your educations');

            }

        }

    }

    //delete education data
    public function education_delete($id)
    {
        $find_specefic_education_delete_data = Education::find($id);
        $delete_education_data = $find_specefic_education_delete_data->delete();
        if($delete_education_data)
        {
            return redirect()->route('education.view')->with('success', 'Successfully, Deleted your educations');
        }
    }


    //return experience view page
    public function experience_view()
    {
        $data['experience_data'] = Experience::all();
        return view('backend.experience.experience_view', $data);
    }

    //return page for adding experience data
    public function experience_add()
    {
        return view('backend.experience.experience_add');
    }

    //store experience data
    public function experience_store(Request $request)
    {
        //validation data
        $validate_data = $request->validate([
            'organization' => 'required',
            'position' => 'required',
            'time' => 'required',
        ]);

        if($validate_data)
        {
            $experience_instance = new Experience();
            $experience_instance->organization = $request->organization;
            $experience_instance->position = $request->position;
            $experience_instance->time = $request->time;
            $save_data = $experience_instance->save();

            if($save_data)
            {
                return redirect()->route('experience.view')->with('success', 'Successfully, Added experience details');
            }


        }
        
    }

    //return page for edit experience data
    public function experience_edit($id)
    {
        $specefic_experience_data = Experience::find($id);
        return view('backend.experience.experience_edit', compact('specefic_experience_data'));
    }

    //update experience data
    public function experience_update(Request $request, $id)
    {
        $specefic_experience_data = Experience::find($id);

        //validation data
        $validate_data = $request->validate([
            'organization' => 'required',
            'position' => 'required',
            'time' => 'required',
        ]);

        if($validate_data)
        {         
            $specefic_experience_data->organization = $request->organization;
            $specefic_experience_data->position = $request->position;
            $specefic_experience_data->time = $request->time;
            $save_data = $specefic_experience_data->save();

            if($save_data)
            {
                return redirect()->route('experience.view')->with('success', 'Successfully, updated experience details');
            }


        }

    }

    //delete experience data
    public function experience_delete($id)
    {
        $delete_experience_data = Experience::find($id);
        $delete_data = $delete_experience_data->delete();

        if($delete_data)
        {
            return redirect()->route('experience.view')->with('success', 'Successfully, deleted experience data');
        }
    }

    //view project 
    public function project_view()
    {
        $data['all_project_data'] = Project::all();
        return view('backend.project.project_view', $data);
    }

    //add project
    public function project_add()
    {
        return view('backend.project.project_add');
    }

    //store project data
    public function project_store(Request $request)
    {
       //validate data 
       $validate_data = $request->validate([
            'project_name' => 'required',
            'project_photo' => 'required|image|mimes:jpeg,png,jpg,svg',
            'project_url' => 'required'
       ]);


       if($validate_data)
       {
           $project_instance = new Project();
           $project_instance->project_name = $request->project_name;
           $project_instance->project_url = $request->project_url;

           if($request->file('project_photo'))
           {
               $file = $request->file('project_photo');
                //dd($file);
                $file_name = 'shuvo'.date('YmHi').'.'.$file->extension();
                // dd($file_name);
                $file->move(public_path('backend/images'), $file_name);
                $project_instance['project_photo'] = $file_name;

           }

           $save_data = $project_instance->save();

           if($save_data)
            {
                return redirect()->route('project.view')->with('success', 'Successfully, added your Project');
            }


       }


    }

    //edit project data
    public function project_edit($id)
    {
        $find_specefic_data = Project::find($id);
        return view('backend.project.project_edit', compact('find_specefic_data'));
    }

    //project data update
    public function project_update(Request $request, $id)
    {
        $find_specefic_project_data = Project::find($id);
        //validate data 
        $validate_data = $request->validate([
            'project_name' => 'required',          
            'project_url' => 'required',
        ]);

      
        if($validate_data)
        {
            $find_specefic_project_data->project_name = $request->project_name;
            $find_specefic_project_data->project_url = $request->project_url;

            if($request->file('project_photo'))
            {
                $file = $request->file('project_photo');
                //dd($file);
                @unlink(public_path('backend/images/'.$find_specefic_project_data->project_photo));
                $file_name = 'shuvo'.date('YmHi').'.'.$file->extension();
                // dd($file_name);
                $file->move(public_path('backend/images'), $file_name);
                $find_specefic_project_data['project_photo'] = $file_name;

            }

            $save_data = $find_specefic_project_data->save();

            if($save_data)
                {
                    return redirect()->route('project.view')->with('success', 'Successfully, updated your Project');
                }

            }

    }







    


}
