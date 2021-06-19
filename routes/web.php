<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\SecretaryController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Auth\RegisteredUserController;

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
    if(Auth::user()){
        return redirect()->route('dashboard');
    }
    if (Auth::guest()) {
        return view('home');
    }
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard',[dashboardController::class , 'show'])->name('dashboard');

Route::get('/manageaccounts',[dashboardController::class , 'showAccounts'])->name('manageaccounts');

Route::get('/addaccount',function ()
{
    return view('admin.addaccount');
})->name('addaccount');

Route::post('/addaccount',[dashboardController::class , 'addaccount']);

Route::get('/addappointment',function ()
{
    return view('secretary.addappointment');
})->name('addappointment');

Route::post('/addappointment',[SecretaryController::class , 'addappointment'])->name('addappointment');

Route::post('/deleteappointment',[SecretaryController::class , 'deleteappointment'])->name('deleteappointment');

Route::get('/chooseprofile',[SecretaryController::class , 'chooseprofile'])->name('chooseprofile');

Route::post('/choosedate',[SecretaryController::class , 'choosedate'])->name('choosedate');

Route::post('/acceptappointment',[DoctorController::class , 'acceptappointment'])->name('acceptappointment');





Route::post('/modifyaccount',[dashboardController::class , 'modifyaccount'])->name('modifyaccount');

Route::post('/submit',[dashboardController::class , 'submit'])->name('submit');

Route::get('/deleteaccount',function ()
{
    return view('admin.deleteaccount');
})->name('deleteaccount');

Route::post('/deleteaccount',[dashboardController::class , 'deleteaccount']);

Route::post('/contact', [contactController::class , 'store']);

Route::post('/newsletter', [NewsletterController::class , 'store'])->name('newsletter');

Route::post('/acceptApproval', [RegisteredUserController::class , 'store'])->name('acceptApproval');

Route::post('/deleteApproval', [dashboardController::class , 'destroy'])->name('deleteApproval');

Route::get('/managemedications',[SecretaryController::class, 'showmedications'])->name('managemedications');

Route::post('/deletemedication',[SecretaryController::class, 'deletemedication'])->name('deletemedication');
Route::get('/addmedication',[SecretaryController::class, 'addmedicationform'])->name('addmedication');
Route::post('/addmedication',[SecretaryController::class, 'addmedication']);




Route::post('/addconsultation',[DoctorController::class, 'addconsultation'])->name('addconsultation');

Route::post('/submitconsultation',[DoctorController::class, 'submitconsultation'])->name('submitconsultation');


Route::get('/shownewsletter',[dashboardController::class, 'shownewsletter'])->name('shownewsletter');


require __DIR__.'/auth.php';
