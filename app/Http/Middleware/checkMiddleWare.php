<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class checkMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();
        $profile_path = 'admin/dashboard/profile/view';
        $about_path =  'admin/dashboard/about/view';
        $about_add_path = 'admin/dashboard/about/add';
        $skills_path = 'admin/dashboard/skill/view';
        $skills_path_add = 'admin/dashboard/skill/add';
        $banners_path = 'admin/dashboard/banner/view';
        $banners_path_add = 'admin/dashboard/banner/add';
        $education_path = 'admin/dashboard/education/view';
        $education_path_add = 'admin/dashboard/education/add';
        $experience_path = 'admin/dashboard/experience/view';
        $experience_path_add = 'admin/dashboard/experience/add';
        $portfolio_path = 'admin/dashboard/project/view';
        $profile_path_add = 'admin/dashboard/project/add';

        // echo $path;
        // echo $request->session()->get('logged_user');
        
        if($path == 'admin/login' && $request->session()->has('logged_user'))
        {
            return redirect()->route('admin.dashboard');
        }
        elseif(!session::get('logged_user') && ($path == $profile_path || $path ==  $about_path ||  $path ==  $about_add_path || $path == $skills_path|| $path == $skills_path_add ||$path ==  $banners_path||$path == $banners_path_add ))
        {
            return redirect()->route('admin.login');
        }
        elseif(!session::get('logged_user') && ($path == $education_path || $path ==  $education_path_add || $path == $experience_path || $path == $experience_path_add || $path == $portfolio_path || $path == $profile_path_add ))
        {
            return redirect()->route('admin.login');
        }
   
       
        return $next($request);
    }
}
