<?php

use Illuminate\Support\Facades\Route;
use App\Models\absen;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
    $posts = absen::all();

    return view('welcome', ['posts' => $posts]);
});


Auth::routes();

Route::post('/absen', function (Request $request) {
    $post = new absen; 
    $post->nama = $request->user()->name;
    $post->waktu = Carbon::now(); 
    $post->keterangan = $request->keterangan;
    $post->save();
    
    return back(); 
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
