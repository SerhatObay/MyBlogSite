<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('created_at','ASC')->get();
        return view('backend.articles.index',compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'min:3',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'

        ]);

        $posts=new Post;
        $posts->title=$request->title;
        $posts->description=$request->description;
        $posts->description=$request->description;

        if ($request->hasFile('image')){
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $posts->image_url='uploads/'.$imageName;
        }
        $posts->save();
        toastr()->success('Makale Oluşturuldu!', 'Başarılı');
        return redirect()->route('makaleler.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts=Post::findorFail($id);
        return view('backend.articles.update',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'min:3',
            'image'=>'|image|mimes:jpeg,png,jpg|max:2048'

        ]);

        $posts=Post::findOrFail($id);
        $posts->title=$request->title;
        $posts->description=$request->description;
        $posts->description=$request->description;

        if ($request->hasFile('image')){
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $posts->image_url='uploads/'.$imageName;
        }
        $posts->save();
        toastr()->success('Makale Güncellendi!', 'Başarılı');
        return redirect()->route('makaleler.index');
    }
    public function switch(Request $request){
        $post=Post::findOrFail($request->id);
        $post->status=$request->statu=="true" ? 1 : 0;
        $post->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete ($id)
    {
        Post::find($id)->delete();
        return redirect()->route('makaleler.index');
        toastr()->success('Makale Silindi', 'Başarılı');
    }

    public function destroy($id)
    {
        //
    }
}
