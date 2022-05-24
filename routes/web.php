<?php


use App\Http\Controllers\Front\Homepage;
use Illuminate\Support\Facades\Route;

Route::get('/', [Homepage::class, 'index'])->name('anasayfa');
Route::get('/about', [\App\Http\Controllers\Front\AboutController::class, 'about'])->name('hakkimda');
Route::get('/contact', [\App\Http\Controllers\Front\ContactController::class, 'contact'])->name('iletisim');



Route::get('/postCreate', [\App\Http\Controllers\Front\PostController::class, 'index'])->name('postCreate');
Route::post('/postCreate', [\App\Http\Controllers\Front\PostController::class, 'create'])->name('postCreatePost');





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

