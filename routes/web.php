<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

// Route:

Route::controller(StudentController::class)->group(function () {
    Route::group(['prefix' => '/students'], function () {
        Route::get('/create' , [StudentController::class , 'addStudentView']);
        Route::post('/store' , [StudentController::class , 'storeStudent']);
        Route::get('/get' , [StudentController::class , 'getStudents']);
    });
});

Route::controller(TeacherController::class)->group(function () {
    Route::group(['prefix' => '/teachers'], function () {
        Route::get('/create' , [TeacherController::class , 'addTeacherView']);
        Route::post('/store' , [TeacherController::class , 'storeTeacher']);
        Route::get('/get' , [TeacherController::class , 'getTeachers']);
    });
});