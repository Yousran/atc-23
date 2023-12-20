<?php

use App\Http\Controllers\AttendantController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ElementRuleController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentStatController;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TableListController;
use App\Http\Controllers\TableRuleController;
use App\Http\Controllers\TutorController;
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

Route::get('/dd',function() {
    return dd(session()->all());
})->name('dd');


Route::middleware('UserCheck')->group(function(){ 

    Route::get('/', function() {
        $data = [
            'sessionData' => session()->all(), // Get all session data
        ];
        return view('dashboard',$data);
    })->name('dashboard');

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
    Route::group(['prefix' => 'program', 'as' => 'program.'], function () {
        Route::get('/{id?}', [CourseController::class, 'view'])->name('index');
        Route::post('/add', [CourseController::class, 'addprogram'])->name('add');
        Route::post('/edit', [CourseController::class, 'editprogram'])->name('edit');
        Route::post('/programpictupload', [CourseController::class, 'programPictUpload'])->name('programpictupload');
    });
    Route::group(['prefix' => 'attendant', 'as' => 'attendant.'], function () {
        Route::get('/signup/{course_id?}', [AttendantController::class, 'registerAttendant'])->name('signup');
        Route::post('/adddata', [AttendantController::class, 'dataUpdate'])->name('adddata');
    });
    Route::group(['prefix' => 'tutor', 'as' => 'tutor.'], function () {
        Route::get('/signup', [TutorController::class, 'registerTutor'])->name('signup');
        Route::post('/adddata', [TutorController::class, 'dataUpdate'])->name('adddata');
    });
    Route::group(['prefix' => 'jadwal', 'as' => 'jadwal.'], function () {
        Route::get('/instruktur', [JadwalController::class, 'jadwalInstruktur'])->name('instruktur');
        Route::get('/attendant', [JadwalController::class, 'jadwalAttendant'])->name('attendant');
        Route::get('/instruktur/add', [JadwalController::class, 'addJadwalInstruktur'])->name('instruktur.add');
        Route::post('/timetable', [JadwalController::class, 'store'])->name('timetable.store');

    });
    Route::group(['prefix' => 'group', 'as' => 'group.'], function () {
        Route::get('/instruktur', [GroupController::class, 'groupInstruktur'])->name('instruktur');
        Route::get('/attendant', [GroupController::class, 'groupAttendant'])->name('attendant');
    });




    Route::group(['prefix' => 'role-permission', 'as' => 'role-permission.'], function () {
        Route::get('/', [RolePermissionController::class, 'index'])->name('index');
        Route::post('/update',[RolePermissionController::class,'editRolePermission'])->name('update');
        Route::post('/sidebar',[RolePermissionController::class,'editSidebarPermission'])->name('sidebar');
        Route::post('/addrole',[RolePermissionController::class,'addNewRole'])->name('addrole');
        Route::post('/deleterole',[RolePermissionController::class,'deleteRole'])->name('deleterole');
    });
    Route::group(['prefix' => 'config', 'as' => 'config.'], function () {
        Route::get('/', [ConfigController::class, 'index'])->name('index');
        
        Route::post('/gender/make', [ConfigController::class, 'createGender'])->name('gender.make');
        Route::post('/gender/edit', [ConfigController::class, 'updateGender'])->name('gender.edit');
        Route::post('/gender/hapus', [ConfigController::class, 'deleteGender'])->name('gender.destroy');
        
        Route::post('/job/make', [ConfigController::class, 'createJob'])->name('job.make');
        Route::post('/job/edit', [ConfigController::class, 'updateJob'])->name('job.edit');              
        Route::post('/job/hapus', [ConfigController::class, 'deleteJob'])->name('job.destroy');
        
        Route::post('/education/make', [ConfigController::class, 'createEducation'])->name('education.make');
        Route::post('/education/edit', [ConfigController::class, 'updateEducation'])->name('education.edit');              
        Route::post('/education/hapus', [ConfigController::class, 'deleteEducation'])->name('education.destroy');
        
        Route::post('/religion/make', [ConfigController::class, 'createReligion'])->name('religion.make');
        Route::post('/religion/edit', [ConfigController::class, 'updateReligion'])->name('religion.edit');              
        Route::post('/religion/hapus', [ConfigController::class, 'deleteReligion'])->name('religion.destroy');

        Route::get('/logs',[LogController::class,'index'])->name('logs');
        Route::get('/logs/json',[LogController::class,'getLogs'])->name('logs.json');
    });

    Route::group(['prefix' => 'table', 'as' => 'table.'], function () {
        Route::get('religions', [ReligionController::class, 'index'])->name('religions');
        Route::get('users', [UserController::class, 'index'])->name('users');
        Route::get('genders', [GenderController::class, 'index'])->name('genders');
        Route::get('educations', [EducationController::class, 'index'])->name('educations');
        Route::get('jobs', [JobController::class, 'index'])->name('jobs');
        Route::get('payment-stats', [PaymentStatController::class, 'index'])->name('payment-stats');
        Route::get('table-lists', [TableListController::class, 'index'])->name('table-lists');
        Route::get('roles', [RoleController::class, 'index'])->name('roles');
        Route::get('element-rules', [ElementRuleController::class, 'index'])->name('element-rules');
        Route::get('table-rules', [TableRuleController::class, 'index'])->name('table-rules');
        Route::get('courses', [CourseController::class, 'index'])->name('courses');
        Route::get('data', [DataController::class, 'index'])->name('data');
        Route::get('settings', [SettingController::class, 'index'])->name('settings');
    
        Route::get('religions/json', [ReligionController::class, 'json'])->name('religions.json');
        Route::get('users/json', [UserController::class, 'json'])->name('users.json');
        Route::get('genders/json', [GenderController::class, 'json'])->name('genders.json');
        Route::get('educations/json', [EducationController::class, 'json'])->name('educations.json');
        Route::get('jobs/json', [JobController::class, 'json'])->name('jobs.json');
        Route::get('payment-stats/json', [PaymentStatController::class, 'json'])->name('payment-stats.json');
        Route::get('table-lists/json', [TableListController::class, 'json'])->name('table-lists.json');
        Route::get('roles/json', [RoleController::class, 'json'])->name('roles.json');
        Route::get('element-rules/json', [ElementRuleController::class, 'json'])->name('element-rules.json');
        Route::get('table-rules/json', [TableRuleController::class, 'json'])->name('table-rules.json');
        Route::get('courses/json', [CourseController::class, 'json'])->name('courses.json');
        Route::get('data/json', [DataController::class, 'json'])->name('data.json');
        Route::get('settings/json', [SettingController::class, 'json'])->name('settings.json');
    });
    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::get('json', [SettingController::class, 'json'])->name('json');
        Route::get('change', [SettingController::class, 'changeSetting'])->name('change');
        Route::post('update', [SettingController::class, 'updateSetting'])->name('update');
    });

});
