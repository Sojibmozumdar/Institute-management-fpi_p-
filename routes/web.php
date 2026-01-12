<?php

use App\Http\Controllers\addNumber;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\deptController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\studentInfoController;
use App\Http\Controllers\TeacherInfoController;
use App\Http\Controllers\cusmoterInfoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [LoginController::class, 'index'])->name('register');
Route::post('/register-save', [LoginController::class, 'save'])->name('register.save');

// Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login-check', [LoginController::class, 'logincheck'])->name('login.check');

// Dashboard (Protected)
Route::get('/dashboard', [LoginController::class, 'godashboard'])
    ->middleware('auth')
    ->name('dashboard');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');









Route::get('/students',[studentController::class,'index'])->name('student');

Route::get('\student_info\create',[studentInfoController::class,'create'])->name('student_info.create');
Route::post('\student_info\store',[studentInfoController::class,'store'])->name('student_info.store');


Route::get('/depertments',[deptController::class,'index'])->name('dept');

Route::get('/teachersList',[teacherController::class,'index'])->name('teacher.list');


Route::get('/teachersInfo',[TeacherInfoController::class,'index'])->name('index');
Route::get('/teachersCreate',[TeacherInfoController::class,'create'])->name('teacher.create');
Route::post('/teachersStore',[TeacherInfoController::class,'store'])->name('teacher.store');

Route::get('/teacher/{id}/edit',[TeacherInfoController::class,'edit'])->name('teacher.edit');


Route::put('/teachersUpdate/{id}', [TeacherInfoController::class,'update'])->name('teacher.update');


Route::delete('/teachersDestroy/{id}',[TeacherInfoController::class,'destroy'])->name('teacher.destroy');





route::get('addNum',[addNumber::class,'index'])->name('findlerge');

route::post('process',[addNumber::class,'find'])->name('find_lerge');

route::get('\customer\create',[cusmoterInfoController::class,'create'])->name('customer.create');

route::post('\customer\store',[cusmoterInfoController::class,'store'])->name('customer.store');








