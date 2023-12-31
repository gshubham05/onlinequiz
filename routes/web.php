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
Route::get('/success',[HomeController::class,'success'])->name('success');;
//Route::get('/pages-login',[HomeController::class,'login'])-name('pages-login');
Route::get('/error',[HomeController::class,'error'])->name('pages-error-404');
Route::get('/blank',[HomeController::class,'blank'])->name('pages-blank');
Route::get('/register',[HomeController::class,'register'])->name('pages-register');
Route::get('/login',[HomeController::class,'login'])->name('pages-login');
Route::get('/questions',[HomeController::class,'questions'])->name('questions.data');
<<<<<<< HEAD
Route::get('/admin/import-questions',[HomeController::class,'import_questions'])->name('import.questions');
=======
Route::get('/admin/questiontype',[HomeController::class,'questiontype'])->name('questiontype');
Route::get('/importquestion',[HomeController::class,'importquestion'])->name('import.editor');
>>>>>>> 160b4af4de0b654cb91184ec241343fc25abe3f3

