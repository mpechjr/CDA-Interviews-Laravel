<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PageController;

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

 
Route::get('/', '\App\Http\Controllers\PageController@show')->name('pages.show');

Route::get('/contact-us', '\App\Http\Controllers\PageController@showContact')->name('pages.showcontact');
 
Route::post('/email/send', '\App\Http\Controllers\MailController@send')->name('email.send');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
Route::get('/pages', '\App\Http\Controllers\PageController@index')->middleware(['auth:sanctum', 'verified'])->name('pages.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/pages/{page}/edit', function ($page) {
    
       // return 'This is the user: ' . $page;
    return Inertia\Inertia::render('Page/Edit');
})->name('pages.edit');

Route::put('/pages/{page}', '\App\Http\Controllers\PageController@update')->middleware(['auth:sanctum', 'verified'])->name('pages.update');

 
Route::put('/pagesmeta/{page}', '\App\Http\Controllers\PageController@updateMeta')->middleware(['auth:sanctum', 'verified'])->name('pages.metaupdate');

 
Route::put('/pagessocial/{page}', '\App\Http\Controllers\PageController@updateSocial')->middleware(['auth:sanctum', 'verified'])->name('pages.socialupdate');


 