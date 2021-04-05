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

Route::get('/', HomeController::class)->name('home');

// Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');

// Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');

// Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');

// Route::get('/cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

// Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

// Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

// Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

Route::resource('cursos', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');
    

// Route::resource('asignaturas', CursoController::class)
//     ->parameters(['asignaturas' => 'cursos'])
//     ->names('cursos');

// php artisan r:l






