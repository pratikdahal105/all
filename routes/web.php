<?php

use App\Http\Controllers\ViewsController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\requestController;

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
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);
//Route::get('/', function(){
//    return view('construction');
//});
Route::get('/', [ViewsController::class, 'index'])->name('home');
Route::get('contact', [ViewsController::class, 'contact'])->name('contact');
Route::get('whyUs', [ViewsController::class, 'why_us'])->name('whyUs');
Route::get('about', [ViewsController::class, 'about'])->name('about');
Route::get('profile', [ViewsController::class, 'profile'])->name('profile');
Route::get('technicalTraining', [ViewsController::class, 'training'])->name('technicalTraining');
Route::get('registrationSupport', [ViewsController::class, 'support'])->name('registrationSupport');
Route::get('specific_skill', [ViewsController::class, 'specific'])->name('specific_skill');
Route::get('employee/{id}', [ViewsController::class, 'employee_form'])->name('employee');
Route::get('employeeDetail/{employee}', [ViewsController::class, 'employee_detail'])->name('employeeDetail');
Route::get('employer/{id}', [ViewsController::class, 'employer_form'])->name('employer');
Route::get('employerDetail/{employer}', [ViewsController::class, 'employer_detail'])->name('employerDetail');
Route::post('employeeForm', [HomeController::class, 'employee'])->name('employeeForm');
Route::post('employerForm', [HomeController::class, 'employer'])->name('employerForm');
Route::get('employeeData', [ViewsController::class, 'listEmployee'])->name('employeeData');
Route::get('employerData', [ViewsController::class, 'listEmployer'])->name('employerData');
Route::get('recruitment/{no}', [ViewsController::class, 'recruitment'])->name('recruitment');
Route::get('privacy_policy', [ViewsController::class, 'privacy'])->name('privacy_policy');
Route::get('technology', [ViewsController::class, 'tech'])->name('technology');
Route::post('contact_mail', [ViewsController::class, 'contact_mail'])->name('contact_mail');
Auth::routes();

Route::group(['prefix'=>'allrahimBackend', 'middleware'=>['auth']], function() {
    Route::get('admin', [BackendController::class, 'index'])->name('admin');
    Route::get('deleteEmployee/{id}', [BackendController::class, 'deleteEmployee'])->name('deleteEmployee');
    Route::get('deleteEmployer/{id}', [BackendController::class, 'deleteEmployer'])->name('deleteEmployer');
    Route::get('employeeList', [BackendController::class, 'listEmployee'])->name('employeeList');
    Route::get('employerList', [BackendController::class, 'listEmployer'])->name('employerList');
    Route::get('employerEdit/{employer}', [BackendController::class, 'editEmployer'])->name('employerEdit');
    Route::post('updateEmployee', [BackendController::class, 'updateEmployee'])->name('updateEmployee');
    Route::post('updateEmployer', [BackendController::class, 'updateEmployer'])->name('updateEmployer');
    Route::any('newEmployee', [BackendController::class, 'newEmployee'])->name('newEmployee');
    Route::any('newEmployer', [BackendController::class, 'newEmployer'])->name('newEmployer');
    Route::get('employeeEdit/{employee}', [BackendController::class, 'editEmployee'])->name('employeeEdit');
    Route::get('bulkUploadEmployee', [BackendController::class, 'csvEmployee'])->name('bulkUploadEmployee');
    Route::post('bulkUploadEmployee', [BackendController::class, 'uploadEmployee'])->name('bulkUploadEmployee');
    Route::get('bulkUploadEmployer', [BackendController::class, 'csvEmployer'])->name('bulkUploadEmployer');
    Route::post('bulkUploadEmployer', [BackendController::class, 'uploadEmployer'])->name('bulkUploadEmployer');
    Route::get('employeeRequest', [requestController::class, 'employee'])->name('employeeRequest');
    Route::any('employeeRequestEdit/{id}', [requestController::class, 'employeeEdit'])->name('employeeRequestEdit');
    Route::get('employeePendingRequest', [requestController::class, 'employeePending'])->name('employeePendingRequest');
    Route::get('employerRequest', [requestController::class, 'employer'])->name('employerRequest');
    Route::any('employerRequestEdit/{id}', [requestController::class, 'employerEdit'])->name('employerRequestEdit');
    Route::get('employerPendingRequest', [requestController::class, 'employerPending'])->name('employerPendingRequest');
});

