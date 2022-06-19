<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\Service;
use App\Models\Project;
use App\Models\Experience;
use App\Models\PersonalInfo;
use App\Models\Feedback;


class PagesController extends Controller
{
    public function index_view(){

        $fetch = Main::first();
        $lists = Service::all();
        $plists = Project::all();
        $elists = Experience::all();
        $personal_info = PersonalInfo::all();

         return view('pages.index',compact('fetch','lists','plists','elists','personal_info'));
    }

    public function project_detail($id)
    {    
        return Project::findorFail($id);
       

    }

    public function store(Request $request)
    {

      
        $this -> validate($request,[
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'message' => 'required|string',
          ]) ;

          $insert = new Feedback();

          $insert->name =$request->name;
          $insert->email =$request->email;
          $insert->phone =$request->phone;
          $insert->description =$request->message;

         $insert ->save();

         return redirect()->route('myportfolio')->with('success','Feedback Submitted Successfully');


    }

    public function view(){

        $fetch_feedback =Feedback::Orderby('id','desc')->paginate(5);
        return view('admin pages.view_feedback',compact('fetch_feedback'));


    }

    


}
