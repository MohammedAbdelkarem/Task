<?php

use App\Http\Controllers\AppointmentController;
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
Route::get('dashboard', function () {
    return view('Dashboard');
});
Route::get('test', function () {
    return view('test');
});

Route::controller(AppointmentController::class)->group(function() {
    Route::post('/app/store' , [AppointmentController::class , 'storeAppointment'])->name('app.store');
    Route::get('/app' , [AppointmentController::class , 'appView'])->name('app.view');
});

Route::controller(StudentController::class)->group(function () {
    Route::group(['prefix' => '/students'], function () {
        Route::get('/create' , [StudentController::class , 'addStudentView'])->name('students.create');
        Route::post('/store' , [StudentController::class , 'storeStudent']);
        Route::get('/get' , [StudentController::class , 'getStudents'])->name('students.get');
    });
});

Route::controller(TeacherController::class)->group(function () {
    Route::group(['prefix' => '/teachers'], function () {
        Route::get('/create' , [TeacherController::class , 'addTeacherView'])->name('teachers.create');
        Route::post('/store' , [TeacherController::class , 'storeTeacher']);
        Route::get('/get' , [TeacherController::class , 'getTeachers'])->name('teachers.get');
    });
});