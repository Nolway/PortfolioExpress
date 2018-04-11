<?php

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('projects', 'ProjectsController@show')->name('projects');

Route::get('projects/ocs-glpi', function (){
	return view('projects.ocs-glpi');
})->name('projects_ocs-glpi');

Route::get('projects/roille', function (){
	return view('projects.roille');
})->name('projects_roille');

Route::get('projects/presse', function (){
	return view('projects.presse');
})->name('projects_presse');

Route::get('projects/hopital', function (){
	return view('projects.hopital');
})->name('projects_hopital');

Route::get('projects/roilleAndroid', function (){
	return view('projects.roilleAndroid');
})->name('projects_roilleAndroid');

Route::get('projects/enquete', function (){
	return view('projects.enquete');
})->name('projects_enquete');

Route::get('projects/serveurs', function (){
	return view('projects.serveurs');
})->name('projects_serveurs');

Route::get('projects/actuassur', function (){
	return view('projects.actuassur');
})->name('projects_actuassur');

Route::get('projects/elastix', function (){
	return view('projects.elastix');
})->name('projects_elastix');

Route::get('projects/fog', function (){
	return view('projects.fog');
})->name('projects_fog');

Route::get('projects/sip', function (){
	return view('projects.sip');
})->name('projects_sip');

Route::get('projects/mysql', function (){
	return view('projects.mysql');
})->name('projects_mysql');



Route::get('skillsBts', function () {
    return view('skillsBts');
})->name('skillsBts');

Route::get('technologicalWatch', function () {
    return view('technologicalWatch');
})->name('technologicalWatch');

Route::get('contact', 'ContactController@show')->name('contact');

//Route::get('contact', 'ContactController@send')->name('contactSend');

Auth::routes();

Route::get('/admin/', 'AdminHomeController@index')->name('admin.home');
