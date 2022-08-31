<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;

use http\Env\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class ContactController extends Controller
{
    public function contact(){
        $contacts=Contact::all();
        $abouts=About::all();
        return view('frontend.contact',compact('contacts','abouts'));
    }

}
