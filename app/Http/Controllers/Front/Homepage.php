<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\About;
use App\Models\Contact;




class Homepage extends Controller
{

    public function index(){
        $posts=Post:: orderBy("id","DESC")->paginate(2);
        $abouts=About::all();



        return view('frontend.homepage',compact('posts','abouts'));


    }




}
