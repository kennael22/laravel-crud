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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','acontroller@index');
// Route::get('/l   ist','acontroller@dataTable')->name('list');
Route::get('accounts', [ //minako.text/students
    'uses' => 'acontroller@dataTable', //set controller@function
    'as' => 'list' //name to put in ajax
]);
Route::post('insert','acontroller@store')->name('insert');

// Route::post('/edit{id}','acontroller@update')->name('update');
Route::post('edit', [ 
    'uses' => 'acontroller@update', //set acontroller@update
    'as' => 'update' //name to put in ajax
]);
Route::get('edit', [ // myblog.test/edit?id=2
    'uses' => 'acontroller@edit', //set acontroller@edit
    'as' => 'edit' //name to put in ajax
]);
Route::post('delete', [ 
    'uses' => 'acontroller@delete', //set acontroller@destroy
    'as' => 'delete' //name to put in ajax
,]);
Auth::routes();
Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','Auth\AdminLoginController@index')->name('admin.dashboard');
});
// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('users', [UserController::class, 'index'])->name('users.index');
