<?php


Route::get('/',function() {
    return view('frontend.homepage');
});
Route::get('about',function() {
    return view('frontend.about');
});
Route::get('contact',function() {
    return view('frontend.contact');
});
Route::get('blog',function() {
    return view('frontend.blog');
});
Route::get('detail',function() {
    return view('frontend.blogDetail');
});
Route::get('admin/404',function() {
    return view('backend.404');
});
Route::get('admin/dashboard',function() {
    return view('backend.dashboard');
});

