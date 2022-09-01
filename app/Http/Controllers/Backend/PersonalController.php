<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    public function index(){
        $personal=Personal::find(1);
        return view('backend.personal.index',compact('personal'));

    }
    public function update(Request $request){
        $personal=Personal::find(1);
        $personal->name=$request->name;
        $personal->shortAbout=$request->unvan;
        $personal->twitter=$request->twitter;
        $personal->instagram=$request->instagram;
        $personal->linkedin=$request->linkedin;
        $personal->github=$request->github;
        $personal->title=$request->hakkimdabaslik;
        $personal->about=$request->hakkimda;
        $personal->save();
        return redirect()->back();






    }


}
