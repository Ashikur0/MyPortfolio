<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


use App\Models\Service;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Feedback;

class AdminController extends Controller
{
    public function admin_dashboard(){

        $total_services = Service::count();
        $total_projects = Project::count();
        $total_experiences = Experience::count();
        $total_feedbacks = Feedback::count();

        return view ('admin pages.dashboard',compact('total_services','total_projects','total_experiences','total_feedbacks'));
    }


    // public function logout(){

    //     Session::flush();
    //     Auth::logout();
    //     return redirect('/');
    // }


}
