<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('namas', 'App\Http\Controllers\NamaController');


// Route::get('/', 'NamaController@index')->name('/');
// Route::get('/', function () {
//     $data = DB::table('namas')->select('first_name','last_name')->get();
//     return view('api_view')->with('admin',$data);
// });