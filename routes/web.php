<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TeacherAuthController;
use App\Http\Controllers\Admin\TeacherDashboardController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\AdminCourseController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/all-courses',[HomeController::class,'course'])->name('course');
Route::get('/login-registration',[HomeController::class,'login'])->name('login-registration');
Route::get('/website-course-detail/{id}',[HomeController::class,'detail'])->name('website.course-detail');

//Teacher Start Dashboard
Route::get('/teacher-login',[TeacherAuthController::class,'login'])->name('teacher.login');
Route::post('/teacher-login-check',[TeacherAuthController::class,'loginCheck'])->name('teacher.login-check');
Route::get('/teacher-dashboard',[TeacherDashboardController::class,'index'])->name('teacher.deshboard')->middleware('teacher');
//Courses Route
Route::get('/add-course',[CourseController::class,'index'])->name('course.add')->middleware('teacher');
Route::post('/new-course',[CourseController::class,'create'])->name('course.new')->middleware('teacher');
Route::get('/manage-course',[CourseController::class,'manage'])->name('course.manage')->middleware('teacher');
Route::get('/detail-course/{id}',[CourseController::class,'detail'])->name('course.detail')->middleware('teacher');
Route::get('/edit-course/{id}',[CourseController::class,'edit'])->name('course.edit')->middleware('teacher');
Route::post('/update-course/{id}',[CourseController::class,'update'])->name('course.update')->middleware('teacher');
Route::get('/delete-course/{id}',[CourseController::class,'delete'])->name('course.delete')->middleware('teacher');
//Teacher Logout
Route::post('/teacher-logout',[TeacherAuthController::class,'logout'])->name('teacher.logout')->middleware('teacher');
//Teacher End Dashboard


Route::middleware(['auth:sanctum', config('jetstream.auth_session'),  'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
   //Teacher Module
    Route::get('/add-teacher',[TeacherController::class,'add'])->name('teacher.add');
    Route::post('/new-teacher',[TeacherController::class,'create'])->name('teacher.new');
    Route::get('/manage-teacher',[TeacherController::class,'manage'])->name('teacher.manage');
    Route::get('/edit-teacher/{id}',[TeacherController::class,'edit'])->name('teacher.edit');
    Route::post('/update-teacher/{id}',[TeacherController::class,'update'])->name('teacher.update');
    Route::get('/delete-teacher/{id}',[TeacherController::class,'destroy'])->name('teacher.delete');
   //User Module
    Route::get('/add-user',[UserController::class,'add'])->name('user.add');
    Route::post('/new-user',[UserController::class,'create'])->name('user.new');
    Route::get('/manage-user',[UserController::class,'manage'])->name('user.manage');
    Route::get('/edit-user/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('/update-user/{id}',[UserController::class,'update'])->name('user.update');
    Route::get('/delete-user/{id}',[UserController::class,'destroy'])->name('user.delete');
    //Course Module
    Route::get('/admin-manage-course',[AdminCourseController::class,'manage'])->name('admin.manage.course');
    Route::get('/admin-course-detail/{id}',[AdminCourseController::class,'detail'])->name('admin.course-detail');
    Route::get('/admin-course-status/{id}',[AdminCourseController::class,'status'])->name('admin.course-status');
    Route::get('/instructor-info/{id}',[TeacherController::class,'instructorProfile'])->name('instructor.info');
});
