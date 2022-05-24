<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        return view('postCreate');
    }

    public function create(Request $request){
        $post=new Post();
        $post->title=$request->title;
        $post->description=$request->description;
        $post->image_url=$request->file;
        $post->save();
        return redirect()->route('anasayfa');
    }
}
