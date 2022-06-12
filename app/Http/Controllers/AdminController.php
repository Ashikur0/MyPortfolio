<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_dashboard(){

        return view ('admin pages.dashboard');
    }


    public function admin_main(){

        return view ('admin pages.main');
    }
}
