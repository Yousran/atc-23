<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ElementRuleController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentStatController;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TableListController;
use App\Http\Controllers\TableRuleController;
use App\Http\Controllers\UploadController;
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


route::group([],function(){
    Route::post('/uploadimage',[UploadController::class,'imageUpload'])->name('uploadimage');
});


Route::middleware('UserCheck')->group(function(){ 

    Route::get('/', function() {
        return dd(session()->all());
    });

    Route::group([], function () {
        Route::get('/login',[LoginController::class,'loginIndex'])->name('login');
        Route::post('/login',[LoginController::class,'login'])->name('login.post');
        
        Route::get('/signup',[LoginController::class,'signupIndex'])->name('signup');
        Route::post('/signup',[LoginController::class,'signup'])->name('signup.post');
        Route::post('/checkusername',[LoginController::class,'checkusername'])->name('checkusername');
        Route::post('/checkemail',[LoginController::class,'checkemail'])->name('checkemail');
        
        Route::post('/profilpictupload',[LoginController::class,'profilpictupload'])->name('profilpictupload');
        
        Route::get('/profil/{username?}',[LoginController::class,'profil'])->name('profil');
        Route::post('/updatedata',[LoginController::class,'updatedata'])->name('updatedata');
        Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    });

    Route::group(['prefix' => 'role-permission', 'as' => 'role-permission.'], function () {
        Route::get('/', [RolePermissionController::class, 'index'])->name('index');
        Route::post('/update',[RolePermissionController::class,'editRolePermission'])->name('update');
        Route::post('/sidebar',[RolePermissionController::class,'editSidebarPermission'])->name('sidebar');
    });

    Route::group(['prefix' => 'religions', 'as' => 'religions.'], function () {
        Route::get('/', [ReligionController::class, 'index'])->name('index');
        Route::get('json', [ReligionController::class, 'json'])->name('json');
    });

    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('json', [UserController::class, 'json'])->name('json');
    });

    Route::group(['prefix' => 'genders', 'as' => 'genders.'], function () {
        Route::get('/', [GenderController::class, 'index'])->name('index');
        Route::get('json', [GenderController::class, 'json'])->name('json');
    });

    Route::group(['prefix' => 'educations', 'as' => 'educations.'], function () {
        Route::get('/', [EducationController::class, 'index'])->name('index');
        Route::get('json', [EducationController::class, 'json'])->name('json');
    });

    Route::group(['prefix' => 'jobs', 'as' => 'jobs.'], function () {
        Route::get('/', [JobController::class, 'index'])->name('index');
        Route::get('json', [JobController::class, 'json'])->name('json');
    });

    Route::group(['prefix' => 'payment-stats', 'as' => 'payment-stats.'], function () {
        Route::get('/', [PaymentStatController::class, 'index'])->name('index');
        Route::get('json', [PaymentStatController::class, 'json'])->name('json');
    });

    Route::group(['prefix' => 'table-lists', 'as' => 'table-lists.'], function () {
        Route::get('/', [TableListController::class, 'index'])->name('index');
        Route::get('json', [TableListController::class, 'json'])->name('json');
    });

    Route::group(['prefix' => 'roles', 'as' => 'roles.'], function () {
        Route::get('/', [RoleController::class, 'index'])->name('index');
        Route::get('json', [RoleController::class, 'json'])->name('json');
    });

    Route::group(['prefix' => 'element-rules', 'as' => 'element-rules.'], function () {
        Route::get('/', [ElementRuleController::class, 'index'])->name('index');
        Route::get('json', [ElementRuleController::class, 'json'])->name('json');
    });

    Route::group(['prefix' => 'table-rules', 'as' => 'table-rules.'], function () {
        Route::get('/', [TableRuleController::class, 'index'])->name('index');
        Route::get('json', [TableRuleController::class, 'json'])->name('json');
    });

    Route::group(['prefix' => 'courses', 'as' => 'courses.'], function () {
        Route::get('/', [CourseController::class, 'index'])->name('index');
        Route::get('json', [CourseController::class, 'json'])->name('json');
    });

    Route::group(['prefix' => 'data', 'as' => 'data.'], function () {
        Route::get('/', [DataController::class, 'index'])->name('index');
        Route::get('json', [DataController::class, 'json'])->name('json');
    });

    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::get('json', [SettingController::class, 'json'])->name('json');
    });

});
