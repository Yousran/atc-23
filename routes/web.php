<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ElementRuleController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PaymentStatController;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TableListController;
use App\Http\Controllers\TableRuleController;
use App\Http\Controllers\UserController;
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

Route::group(['prefix' => 'religion', 'as' => 'religion.'], function () {
    Route::get('/', [ReligionController::class, 'index'])->name('index');
    Route::get('json', [ReligionController::class, 'json'])->name('json');
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('json', [UserController::class, 'json'])->name('json');
});

Route::group(['prefix' => 'gender', 'as' => 'gender.'], function () {
    Route::get('/', [GenderController::class, 'index'])->name('index');
    Route::get('json', [GenderController::class, 'json'])->name('json');
});

Route::group(['prefix' => 'education', 'as' => 'education.'], function () {
    Route::get('/', [EducationController::class, 'index'])->name('index');
    Route::get('json', [EducationController::class, 'json'])->name('json');
});

Route::group(['prefix' => 'job', 'as' => 'job.'], function () {
    Route::get('/', [JobController::class, 'index'])->name('index');
    Route::get('json', [JobController::class, 'json'])->name('json');
});

Route::group(['prefix' => 'payment-stat', 'as' => 'payment-stat.'], function () {
    Route::get('/', [PaymentStatController::class, 'index'])->name('index');
    Route::get('json', [PaymentStatController::class, 'json'])->name('json');
});

Route::group(['prefix' => 'table-list', 'as' => 'table-list.'], function () {
    Route::get('/', [TableListController::class, 'index'])->name('index');
    Route::get('json', [TableListController::class, 'json'])->name('json');
});

Route::group(['prefix' => 'role', 'as' => 'role.'], function () {
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::get('json', [RoleController::class, 'json'])->name('json');
});

Route::group(['prefix' => 'element-rule', 'as' => 'element-rule.'], function () {
    Route::get('/', [ElementRuleController::class, 'index'])->name('index');
    Route::get('json', [ElementRuleController::class, 'json'])->name('json');
});

Route::group(['prefix' => 'table-rule', 'as' => 'table-rule.'], function () {
    Route::get('/', [TableRuleController::class, 'index'])->name('index');
    Route::get('json', [TableRuleController::class, 'json'])->name('json');
});

Route::group(['prefix' => 'course', 'as' => 'course.'], function () {
    Route::get('/', [CourseController::class, 'index'])->name('index');
    Route::get('json', [CourseController::class, 'json'])->name('json');
});

Route::group(['prefix' => 'data', 'as' => 'data.'], function () {
    Route::get('/', [DataController::class, 'index'])->name('index');
    Route::get('json', [DataController::class, 'json'])->name('json');
});

Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
    Route::get('/', [SettingController::class, 'index'])->name('index');
    Route::get('json', [SettingController::class, 'json'])->name('json');
});

