<?php

use App\Http\Controllers\Admin\AnnouncementsController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\InstructorsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CommentsController;
use App\Http\Controllers\User\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', function () {
//    return view('user.home.home');
//});

Route::get('/dashboard', function () {
    return view('admin.dashbord-body-content');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//use here laravel resources Method for admin
Route::resources([
    'courses' => CoursesController::class,
    'announcements' => AnnouncementsController::class,
    'instructors' => InstructorsController::class,
    'events' => EventsController::class,
]);


//user controller
Route::controller(HomeController::class)->group( function(){
    Route::get("/", 'index');
    //show single page course
    Route::get("/course/single-page/{id}", 'course_single_')->name('course_single');
    //show single page teacher
    Route::get("/teacher/single-page/{id}", 'teacher_single')->name('teacher_single');
});
//use here laravel resources Method  user 
Route::resources([
    'comments' =>CommentsController::class,
]);

require __DIR__.'/auth.php';
