<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return "Welcome Home guys";
// });

// Route::get('/courses', function(){
//     return "Welcome to courses";
// });

// Route::get('/courses/{course}', function($course){
//     return "Welcome to the course $course";
// });

// Route::get('/courses/{course}/{lesson?}', function($course, $lesson = null){
//     if($lesson){
//         return "The course is: $course and the lesson's: $lesson";
//     }else{
//         return "the course is: $course";
//     }
// });

Route::get('/', HomeController::class);

Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::get('/cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');






