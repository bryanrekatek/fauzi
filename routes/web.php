<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaranaPrasaranaController;
use App\Http\Controllers\SaranaController;
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
    return redirect()->route('login');
});



    
require __DIR__.'/auth.php';
