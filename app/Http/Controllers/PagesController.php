<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\Service;
use App\Models\Project;


class PagesController extends Controller
{
    public function index_view(){

        $fetch = Main::first();
        $lists = Service::all();
        $plists = Project::all();

         return view('pages.index',compact('fetch','lists','plists'));
    }

    public function project_detail($id)
    {
        
       
        return Project::findorFail($id);
        //return view('pages.index',compact('modal_data'));

    }

}
