<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,'index']);
Route::get('/users-profile',[HomeController::class,'profile'])->name('users-profile');

// routes/web.php

// Route::get('/adminer', function () {
//     return view('adminer');
// });

Route::get('/user',[HomeController::class,'details']);
Route::get('/category',[HomeController::class,'editor'])->name('categorie.editor');
Route::post('/category/save',[HomeController::class,'save'])->name('category.save');
// Route::get('/',[HomeController::class,'']->name('');
Route::get('/success',[HomeController::class,'success']);
//Route::get('/pages-login',[HomeController::class,'login'])-name('pages-login');
Route::get('/error',[HomeController::class,'error'])->name('pages-error-404');
Route::get('/blank',[HomeController::class,'blank'])->name('pages-blank');
Route::get('/register',[HomeController::class,'register'])->name('pages-register');
Route::get('/login',[HomeController::class,'login'])->name('pages-login');

