<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\About;


class AboutController extends Controller
{
    public function about(){
        $abouts=About::all();
        return view('frontend.about',compact('abouts'));
    }
}
