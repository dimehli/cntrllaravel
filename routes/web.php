<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PayController;
use App\Models\Student;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

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
    return view('auth.login');
});


// Routes pour les étudiants
Route::resource('/etudiant', StudentController::class);
Route::get('/etudiant.create', [StudentController::class, 'create'])->name('student/create');
Route::post('/etudiant.create', [StudentController::class, 'store'])->name('etudiant.store');
Route::get('/etudiant/{id}/edit', [StudentController::class, 'edit']);
Route::delete('/etudiant/{id}', [StudentController::class, 'destroy']);

// Routes pour les enseignants
Route::resource('/teachers', TeacherController::class);
Route::get('/teachers.create', [TeacherController::class, 'create'])->name('teachers/create');
Route::post('/teachers.create', [TeacherController::class, 'store'])->name('teachers.store');

// Routes pour les paiements
Route::resource('/payment', PayController::class);
Route::get('/payment.create', [PayController::class, 'create'])->name('payment/create');
Route::post('/payment.create', [PayController::class, 'store'])->name('payment.store');

// Page de tableau de bord


// Routes nécessitant l'authentification
Route::middleware('auth')->group(function () {
    // Page d'accueil après connexion
    Route::match(['get', 'post'], '/home.home', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index'])->name('home.home');

    // Routes pour le profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route de déconnexion
    Route::post('/login', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Routes d'authentification
require __DIR__.'/auth.php';
