<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\StaffController;

use function Ramsey\Uuid\v1;

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

Route::get('/', [HomePageController::class, 'home']);
Route::get('/welcome', [HomePageController::class, 'welcome']);

Route::prefix('announcements')
  ->name('announcements.')
  ->group(function () {

    //get list of documnets
    Route::get('/{type}', [AnnouncementController::class, 'index'])->name('index');
  });

Route::prefix('documents')
  ->name('documents.')
  ->group(function () {

    //get list of documnets
    Route::get('/', [DocumentController::class, 'index'])->name('index');
  });

Route::prefix('activities')
  ->name('activities.')
  ->group(function () {
    //achievements
    Route::get('/achievements/{achievementTypeId}', [ActivityController::class, 'typeAchievements'])->name('achievements.type');
    Route::get('/achievements', [ActivityController::class, 'achievements'])->name('achievements');

    //events
    Route::get('/events/{eventTypeId}', [ActivityController::class, 'typeEvents'])->name('events.type');
    Route::get('/events', [ActivityController::class, 'events'])->name('events');
  });

Route::prefix('resources')
  ->name('resources.')
  ->group(function () {
    Route::get('/laboratories', [ResourceController::class, 'laboratories'])->name('laboratories');
    Route::get('/photo-gallery', [ResourceController::class, 'photoGallery'])->name('photo-gallery');
  });

Route::prefix('staff')
  ->name('staff.')
  ->group(function () {
    Route::get('/info/{staffId}', [StaffController::class, 'info'])->name('info');
    Route::get('/list/{type}', [StaffController::class, 'index'])->name('index');
  });

Route::prefix('departments')
  ->name('departments.')
  ->group(function () {
    Route::get('index', [DepartmentController::class, 'index'])->name('index');
    Route::get('info/{slug}', [DepartmentController::class, 'info'])->name('info');
  });

Route::prefix('about')
  ->name('about.')
  ->group(function () {
    Route::get('profile', [AboutController::class, 'profile'])->name('profile');
    Route::get('trust', [AboutController::class, 'trust'])->name('trust');
    Route::get('vision-mission', [AboutController::class, 'visionMission'])->name('vision-mission');
    Route::get('founder', [AboutController::class, 'founder'])->name('founder');
    Route::get('governing-body', [AboutController::class, 'governingBody'])->name('governing-body');
    Route::get('contact-us', [AboutController::class, 'contactUs'])->name('contact-us');
  });

Route::prefix('academics')
  ->name('academics.')
  ->group(function () {
    Route::get('courses', [AcademicsController::class, 'courses'])->name('courses');
    Route::get('admission', [AcademicsController::class, 'admission'])->name('admission');
  });
