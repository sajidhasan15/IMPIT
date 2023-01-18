<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Mail\TestEmail;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;

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
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('Home');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('About');
Route::get('/services', 'App\Http\Controllers\SerrvicesController@index')->name('Services');
Route::get('/team', 'App\Http\Controllers\TeamController@index')->name('Team');
Route::get('/gallery', 'App\Http\Controllers\GalleryController@index')->name('Gallery');
Route::get('/career', 'App\Http\Controllers\CareerController@index')->name('Career');
// Route::post('/DataInsart', [CareerController::class, 'DataInsart']);
// Route::post('/send-email', 'App\Http\Controllers\CareerController')->name('page.');
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('Contact');

//Admin Panel Routes
Route::get('/dashboard', 'App\Http\Controllers\Dashboard@index')->name('Dashboard');
Route::get('/profile', 'App\Http\Controllers\userProfile@index')->name('Profile');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', ['App\Http\Controllers\HomeController::class', 'index'])->name('home');