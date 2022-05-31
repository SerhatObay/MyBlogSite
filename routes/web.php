<?php


use App\Http\Controllers\Front\Homepage;
use Illuminate\Support\Facades\Route;



 /*
  Frontend
 */
Route::get('/', [Homepage::class, 'index'])->name('anasayfa');
Route::get('/about', [App\Http\Controllers\Front\AboutController::class, 'about'])->name('hakkimda');
Route::get('/contact', [App\Http\Controllers\Front\ContactController::class, 'contact'])->name('iletisim');
Route::get('/postCreate', [App\Http\Controllers\Front\PostController::class, 'index'])->name('postCreate');
Route::post('/postCreate', [App\Http\Controllers\Front\PostController::class, 'create'])->name('postCreatePost');
Route::get('/delete-haber/{id}',[App\Http\Controllers\Front\PostController::class,'remove'])->name('deletePost');

/*-----------------------------------------------------------------------------------------------------------------------------------------------*/


/*
 Backend
*/



Route::prefix('admin')->middleware('isLogin')->group(function (){

    Route::get('login',[App\Http\Controllers\Backend\AuthController::class,'login'])->name('login');
    Route::post('login',[App\Http\Controllers\Backend\AuthController::class,'loginPost'])->name('login.post');
});



Route::prefix('admin')->middleware('isAdmin')->group(function (){
    Route::get('dashboard',[App\Http\Controllers\Backend\DashboardController::class,'index'])->name('dashboard');
    Route::get('cikis',[App\Http\Controllers\Backend\AuthController::class,'logout'])->name('logout');

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



