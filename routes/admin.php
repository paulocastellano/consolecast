<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\UserController;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is.admin']], function () {


    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // courses
    Route::get('/courses', [CourseController::class, 'index'])->name('admin.courses.index');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('admin.courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('admin.courses.store');
    Route::get('/courses/{id}', [CourseController::class, 'edit'])->name('admin.courses.edit');
    Route::put('/courses/{id}', [CourseController::class, 'update'])->name('admin.courses.update');
    Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');

    // topics
    Route::get('/topics', [TopicController::class, 'index'])->name('admin.topics.index');
    Route::get('/topics/create', [TopicController::class, 'create'])->name('admin.topics.create');
    Route::post('/topics', [TopicController::class, 'store'])->name('admin.topics.store');
    Route::get('/topics/{id}', [TopicController::class, 'edit'])->name('admin.topics.edit');
    Route::put('/topics/{id}', [TopicController::class, 'update'])->name('admin.topics.update');
    Route::delete('/topics/{id}', [TopicController::class, 'destroy'])->name('admin.topics.destroy');

    // subscriptions
    Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('admin.subscriptions.index');

    // users
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('admin.users.show');
});
