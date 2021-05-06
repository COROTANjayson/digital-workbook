<?php

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


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/registration', function () {
    return view('auth.registration');
});

Route::get('/quizlist', function () {
    return view('student.quizlist');
});
Route::get('/attemptquiz', function () {
    return view('student.attemptquiz');
});
Route::get('/answerquiz', function () {
    return view('student.answerquiz');
});
Route::get('/finishquiz', function () {
    return view('student.finishquiz');
});
Route::get('/viewscore', function () {
    return view('student.viewscore');
});

/* Teacher */
Route::get('/teacher-quizlist', function () {
    return view('teacher.quizlist');
});
Route::get('/create-quiz', function () {
    return view('teacher.createquiz');
});
Route::get('/created', function () {
    return view('teacher.created');
});
