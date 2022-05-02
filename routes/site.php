<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\PricingController;
use App\Http\Controllers\Site\TermController;
use App\Http\Controllers\Site\PrivacyController;

use App\Http\Controllers\Site\ProfileController;
use App\Http\Controllers\Site\BillingController;

use App\Http\Controllers\Site\CourseController;
use App\Http\Controllers\Site\LessonController;
use App\Http\Controllers\Site\LessonCommentController;
use App\Http\Controllers\Site\TopicController;

Route::group(['middleware' => []], function () {

    // site
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
    Route::get('/terms', [TermController::class, 'index'])->name('terms');
    Route::get('/privacy', [PrivacyController::class, 'index'])->name('policy');

    // courses
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/global-search', [CourseController::class, 'globalSearch'])->name('courses.global-search');
    Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('courses.show');

    // lessons
    Route::get('/courses/{slug}/lessons/{lesson}', [LessonController::class, 'show'])->name('lessons.show');

    // lesson comments
    Route::post('/lesson-comments', [LessonCommentController::class, 'store'])->name('lesson-comments.store');

    // topics
    Route::get('/topics', [TopicController::class, 'index'])->name('topics.index');
    Route::get('/topics/{slug}', [TopicController::class, 'show'])->name('topics.show');

    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');
    Route::post('/profile/user-preference', [ProfileController::class, 'updateUserPreference'])->name('profile.user-preference');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/billing', BillingController::class)->name('billing');
});
