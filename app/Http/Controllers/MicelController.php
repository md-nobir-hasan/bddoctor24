<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MicelController extends Controller
{
    public function dashboard(){
        return view('backend.pages.dashboard');
    }
}
