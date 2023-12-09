<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;

class LogoController extends Controller
{
    public function get_logo (){
        $logo = Logo::first();
        if($logo){
            return view('components/navbar',compact('logo'));
        }
    
    }
}
