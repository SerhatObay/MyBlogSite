<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\About;
use App\Models\Contact;
use Mail;




class Homepage extends Controller
{

    public function index(){
        $posts=Post::where('status',1)->orderBy("created_at","DESC")->paginate(10);
        $abouts=About::all();



        return view('frontend.homepage',compact('posts','abouts'));


    }




}
