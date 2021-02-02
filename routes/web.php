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

Route::get('/', function ()                 { return view('index'); })->name('home');
Route::get('/about', function ()            { return view('about'); })->name('about');
Route::get('/specialisation', function ()   { return view('specialisation');})->name('specialisation');
Route::get('/submit', function ()           { return view('submit'); })->name('submit');
Route::get('/construction', function ()     { return view('construction'); })->name('construction');
Route::get('/civil', function ()            { return view('civil'); })->name('civil');
Route::get('/ship', function ()             { return view('ship'); })->name('ship');
Route::get('/powerpoint', function ()       { return view('powerpoint'); })->name('powerpoint');
Route::get('/mining', function ()           { return view('mining'); })->name('mining');
Route::get('/candidate', function ()        { return view('candidate'); })->name('candidate');
Route::get('/migration', function ()        { return view('migration'); })->name('migration');
Route::get('/contact', function ()          { return view('contact'); })->name('contact');

//category directory
Route::get('/civil-engineering-recruitment', function ()                        { return view('category/civil-engineering-recruitment'); })->name('civil-engineering-recruitment-agency');
Route::get('/construction-project-management-recruitment', function ()          { return view('category/construction-project-management-recruitment'); })->name('construction-project-management-recruitment');
Route::get('/construction-recruitment-agency', function ()                      { return view('category/construction-recruitment-agency'); })->name('construction-recruitment-agency');
Route::get('/energy-recruitment', function ()                                   { return view('category/energy-recruitment'); })->name('energy-recruitment');
Route::get('/mining-recruitment-agency', function ()                            { return view('category/mining-recruitment-agency'); })->name('mining-recruitment-agency');
Route::get('/nuclear-recruitment', function ()                                  { return view('category/nuclear-recruitment'); })->name('nuclear-recruitment');
Route::get('/power-plant-recruitment-agency', function ()                       { return view('category/power-plant-recruitment-agency'); })->name('power-plant-recruitment-agency');
Route::get('/power-plant-recruitment-agency', function ()                       { return view('category/power-plant-recruitment-agency'); })->name('power-plant-recruitment-agency');
Route::get('/shipbuilding-recruitment-agency', function ()                      { return view('category/shipbuilding-recruitment-agency'); })->name('shipbuilding-recruitment-agency');


//Contacts / feedback form
Route::post('/feedback', 'FeedbackController@store')->name('feedbackForm.store');
