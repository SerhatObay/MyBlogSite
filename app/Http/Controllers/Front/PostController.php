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
        $post->title=strip_tags($request->title);
        $post->description=$request->description;

        $name = time() . '.jpg';
        $img=$request->file;
        $img->move(public_path('/paylasım/resim'),$name);
        $post->image_url = '/paylasım/resim' . '/' . $name;

        $post->save();
        return redirect()->route('anasayfa');
    }

    public function remove($silinecek_id){

      $gonderi=  Post::where("id",$silinecek_id)->first();
      $gonderi->delete();
        return redirect()->route('anasayfa');

    }
}
