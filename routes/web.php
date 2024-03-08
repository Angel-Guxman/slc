<?php

use App\Http\Controllers\Estudents\EstudentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use App\Models\Student;
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

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/formulario', function () {
    return view('profile.formulario');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
/* 
Route::get('/students', function () {
    return view('students.students');
})->middleware(['auth', 'verified'])->name('students'); */

 Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

// Ruta para manejar la publicación del formulario (almacenar el estudiante) frtdgdg
Route::get('/students/create', [EstudentsController::class, 'create'])->name('students.create');

// Ruta para CREAR EL USUARIO
Route::post('/students', [EstudentsController::class, 'store'])->name('students.store');


//ruta para atraer y mostrar los estudiantes en la tabla
 Route::get('/students', [EstudentsController::class, 'index'])->name('students');

 //ruta para editar un Estudiante desde el link
 Route::get('/students/{student}/edit', [EstudentsController::class, 'edit'])->name('students.edit');

 //ruta para actualizar un Estudiante:
 Route::put('/students/{student}', [EstudentsController::class, 'update'])->name('students.update');

 //ruta para eliminar un Estudiante
 Route::delete('students/{student}',[EstudentsController::class,'destroy'])->name('students.destroy');

Route::get('/subjects',[SubjectController::class,'index'])->name('subjects.index');

require __DIR__.'/auth.php';
