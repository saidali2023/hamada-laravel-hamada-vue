<?php
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Auth::routes(); */

Route::get('/', [HomeController::class, 'index'])->name('home');
/* Route::get('post/{slug}',function(){
    return view('blog_post');
}); */
// Route::get('{any}',function($any){
//     return view('home');
// })->where('any','.*');
Route::get('/home', function () {
    return view('welcome');
});
