<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CellsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\IQACController;
use App\Http\Controllers\ResearchInnovationController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TnpController;
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

Route::get('/', [HomePageController::class, 'home']);
Route::get('/welcome', [HomePageController::class, 'welcome']);

Route::prefix('iqac')
  ->name('iqac.')
  ->group(function () {
    Route::get('/about', [IQACController::class, 'about']);
    Route::get('/composition', [IQACController::class, 'composition']);
    Route::get('/initiatives', [IQACController::class, 'initiatives']);
    Route::get('/moms', [IQACController::class, 'moms']);
    Route::get('/aishe', [IQACController::class, 'aishe']);
    Route::get('/iiqa', [IQACController::class, 'iiqa']);
    Route::get('/practices', [IQACController::class, 'practices']);
    Route::get('/distinctiveness', [IQACController::class, 'distinctiveness']);
  });

Route::prefix('rni')
  ->name('rni.')
  ->group(function () {

    //reserach
    Route::get('/research/about', [ResearchInnovationController::class, 'about']);
    Route::get('/research/ethics', [ResearchInnovationController::class, 'ethics']);
    Route::get('/research/patents', [ResearchInnovationController::class, 'patents']);
    Route::get('/research/publications', [ResearchInnovationController::class, 'publications']);
    Route::get('/research/mous', [ResearchInnovationController::class, 'mous']);
    Route::get('/research/books', [ResearchInnovationController::class, 'books']);
    Route::get('/research/consultancy', [ResearchInnovationController::class, 'consultancy']);
    Route::get('/research/grants', [ResearchInnovationController::class, 'grants']);
    Route::get('/research/doctaral', [ResearchInnovationController::class, 'doctaral']);
    Route::get('/research/pg', [ResearchInnovationController::class, 'pg']);

    //ssip
    Route::get('/ssip/about', [ResearchInnovationController::class, 'ssipAbout']);
    Route::get('/ssip/mentors', [ResearchInnovationController::class, 'ssipMentors']);
    Route::get('/ssip/updates', [ResearchInnovationController::class, 'ssipUpdates']);
    Route::get('/ssip/apply', [ResearchInnovationController::class, 'ssipApply']);

    //iic
    Route::get('/iic', [ResearchInnovationController::class, 'iic']);
  });

Route::prefix('tnp')
  ->name('tnp.')
  ->group(function () {
    Route::get('/committee', [TnpController::class, 'committee'])->name('committee');
    Route::get('/placements', [TnpController::class, 'placements'])->name('placements');
    Route::get('/visits', [TnpController::class, 'visits'])->name('visits');
    Route::get('/activity', [TnpController::class, 'activity'])->name('activity');
  });

Route::prefix('cells')
  ->name('cells.')
  ->group(function () {
    Route::get('/iqac', [CellsController::class, 'iqac'])->name('iqac');
    Route::get('/grc', [CellsController::class, 'grc'])->name('grc');
    Route::get('/arc', [CellsController::class, 'arc'])->name('arc');
    Route::get('/wdc', [CellsController::class, 'wdc'])->name('wdc');
    Route::get('/gsc', [CellsController::class, 'gsc'])->name('gsc');
    Route::get('/adc', [CellsController::class, 'adc'])->name('adc');
    Route::get('/scst', [CellsController::class, 'scst'])->name('scst');
    Route::get('/cpc', [CellsController::class, 'cpc'])->name('cpc');
  });

Route::prefix('students')
  ->name('students.')
  ->group(function () {
    Route::get('/ssip', [StudentsController::class, 'ssip'])->name('ssip');
    Route::get('/alumni', [StudentsController::class, 'alumni'])->name('alumni');
    Route::get('/scholorships', [StudentsController::class, 'scholorships'])->name('scholorships');
    Route::get('/timetables', [StudentsController::class, 'timetables'])->name('timetables');
  });

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

    Route::get('/transportation', [ResourceController::class, 'transportation'])->name('transportation');
    Route::get('/cafeteria', [ResourceController::class, 'cafeteria'])->name('cafeteria');
    Route::get('/seminar-hall', [ResourceController::class, 'seminarHall'])->name('seminar-hall');
    Route::get('/medical', [ResourceController::class, 'medical'])->name('medical');
    Route::get('/central', [ResourceController::class, 'central'])->name('central');
    Route::get('/hostel', [ResourceController::class, 'hostel'])->name('hostel');
    Route::get('/sports', [ResourceController::class, 'sports'])->name('sports');

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
    Route::get('principal', [AboutController::class, 'principal'])->name('principal');
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
    Route::get('courses/bpharm', [AcademicsController::class, 'bpharm'])->name('bpharm');
    Route::get('courses/shortterm', [AcademicsController::class, 'shortterm'])->name('shortterm');
    Route::get('admission', [AcademicsController::class, 'admission'])->name('admission');
    Route::get('approvals', [AcademicsController::class, 'approvals'])->name('approvals');
  });
