<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Admindashboard\BattingRecord;
use App\Http\Livewire\Admindashboard\HomePage;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('bettingdashboard.homepage');
// }); 

// Route::get('/admin', function () {
//     return view('adminpanel.bettingPanel');
// });

// Route::get('/allusers', function () {
//     return view('adminpanel.allUserListPanel');
// });

Route::get('/register', function () {
    return view('bettingdashboard.userRegistration');
});

Route::prefix("admin")->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::match(["POST","GET"],"/login",'adminlogin')->name('admin.login');
        // using auth 
        Route::middleware("auth:admin")->group(function(){
         Route::get('/dashboard','index')->name('admin.panel');
        });
    });
});


Route::prefix("presell")->group(function(){
    Route::controller(UserController::class)->group(function(){
        Route::match(["POST","GET"],"/login",'userlogin')->name('user.login');
        // using auth 
        Route::middleware("auth:user")->group(function(){
         Route::get('/dashboard','index')->name('user.panel');
        });
    });
});
