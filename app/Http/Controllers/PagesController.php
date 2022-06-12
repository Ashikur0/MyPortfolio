<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class PagesController extends Controller
{
    public function index_view(){

        $fetch = Main::first();
         return view('pages.index',compact('fetch'));
    }
}
