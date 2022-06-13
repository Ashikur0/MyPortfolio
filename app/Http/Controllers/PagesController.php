<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\Service;


class PagesController extends Controller
{
    public function index_view(){

        $fetch = Main::first();
        $lists = Service::all();
         return view('pages.index',compact('fetch','lists'));
    }
}
