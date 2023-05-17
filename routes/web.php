<?php

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

Route::get('/', function () {
    return view('adminpanel.bettingPanel');
});
Route::get('/allusers', function () {
    return view('adminpanel.allUserListPanel');
});
Route::get('/bettingrecords', function () {
    return view('adminpanel.bettingRecordsPanel');
});