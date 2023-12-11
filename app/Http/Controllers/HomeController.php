<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;

class HomeController extends Controller
{
    public function index(){
        // redirect to dashboard
        $logo = Logo::first();
        // return view('components/',compact('logo'));
    }
}
