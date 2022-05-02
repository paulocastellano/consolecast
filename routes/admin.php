<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CourseController;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is.admin']], function () {


    // dashboard
    Route::get('/dashboard', [CourseController::class, 'index'])->name('admin.dashboard');

    // courses
    Route::get('/courses', [CourseController::class, 'index'])->name('admin.courses.index');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('admin.courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('admin.courses.store');
    Route::get('/courses/{id}', [CourseController::class, 'edit'])->name('admin.courses.edit');
    Route::put('/courses/{id}', [CourseController::class, 'update'])->name('admin.courses.update');
    Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');

    // topics
    Route::get('/topics', [CourseController::class, 'index'])->name('admin.topics.index');

    // subscriptions
    Route::get('/subscriptions', [CourseController::class, 'index'])->name('admin.subscriptions.index');

    // users
    Route::get('/users', [CourseController::class, 'index'])->name('admin.users.index');
});
