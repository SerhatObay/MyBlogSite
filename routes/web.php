<?php


use App\Http\Controllers\Front\Homepage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\Backend\PersonalController;





 /*
  Frontend
 */
Route::get('/', [Homepage::class, 'index'])->name('anasayfa');
Route::get('/about', [App\Http\Controllers\Front\AboutController::class, 'about'])->name('hakkimda');
Route::get('/contact', [App\Http\Controllers\Front\ContactController::class, 'contact'])->name('iletisim');
Route::post('/contact', [App\Http\Controllers\Front\ContactController::class, 'contactpost'])->name('iletisim.post');
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
    Route::resource('makaleler',ArticleController::class);
    Route::get('/switch',[ArticleController::class,'switch'])->name('switch');
    Route::get('/deletearticle/{id}',[ArticleController::class,'delete'])->name('delete.article');
    Route::get('dashboard',[App\Http\Controllers\Backend\DashboardController::class,'index'])->name('dashboard');
    Route::get('cikis',[App\Http\Controllers\Backend\AuthController::class,'logout'])->name('logout');

    Route::get('/personal',[\App\Http\Controllers\Backend\PersonalController::class,'index'])->name('personal');
    Route::post('/personal/update',[\App\Http\Controllers\Backend\PersonalController::class,'update'])->name('personal.update');


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



