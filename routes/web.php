<?php

use App\Http\Controllers\Userprofile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index']);
Route::get('/company', [HomeController::class,'company']);
Route::get('/joblisting', [HomeController::class,'joblisting']);
Route::get('/applyJob', [HomeController::class,'applyJob']);
Route::post('/submitapplication/{job}', [HomeController::class,'submitapplication']);
Route::view('/aboutus', 'pages.static.about');
Route::view('/contact', 'pages.static.contact');
Route::get('/registeremployer', [ProfileController::class, 'registeremployer'])->name('registeremployer');
Route::post('/registeremployer', [ProfileController::class, 'postregisteremployer'])->name('postregisteremployer');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/company',[adminController::class,'company']);
    Route::get('/company/{company}',[adminController::class,'deletecompany']);

    Route::get('/admin/role/{role}',[adminController::class,'roleuserlist']);
    Route::get('/admin/user',[adminController::class,'users']);
    Route::get('/admin/profile',[adminController::class,'profile']);
    Route::post('/admin/updateProfile',[adminController::class,'updateProfile']);
    Route::get('/employee/{user}',[adminController::class,'deleteemployee']);
    Route::get('/job/{job}',[adminController::class,'deletejob']);
    Route::get('admin/applicants',[adminController::class,'applicants']);
    Route::get('/application/{application}/{status}',[adminController::class,'applicantsStatus']);

    Route::get('admin/vacancy',[adminController::class,'vacancy']);
    Route::get('admin/createJob',[adminController::class,'createJob']);
    Route::post('/admin/savejob',[adminController::class,'savejob']);

    Route::get('admin/category/',[adminController::class,'category']);
    Route::get('category{category}/delete',[adminController::class,'deletecategory']);
});


Route::get('/CV', [Userprofile::class, 'index'])->name('index');
Route::get('/user/{id}/{template?}', [Userprofile::class, 'view'])->name('user.profile.view');
Route::get('/create', [Userprofile::class, 'create'])->name('user.profile.create');
Route::post('/store', [Userprofile::class, 'store'])->name('store');
Route::get('/edit/{id}', [Userprofile::class, 'edit'])->name('edit');
Route::post('/update', [Userprofile::class, 'update'])->name('update');
Route::post('/destroy/{id}', [Userprofile::class, 'destroy'])->name('cv.destroy');

require __DIR__.'/auth.php';
