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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'] ], function () {
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::resource('project', 'ProjectController');
    Route::resource('project.details', 'ProjectDetailsController');
    Route::resource('project.quiz', 'ProjectQuizController');
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::get('project/{project}/group',['as' => 'project.group.index', 'uses'=>'KelompokController@index']);
    Route::post('project/{project}/group',['as' => 'project.group.store', 'uses'=>'KelompokController@store']);
    Route::post('project/group/{kelompok_detail}',['as' => 'project.group.destroy', 'uses'=>'KelompokController@destroy']);
    Route::resource('project.komentar', 'KomentarController');
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/detail', ['as' => 'profile.detail', 'uses' => 'ProfileController@updateDetails']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons');
    Route::get('table-list', function () {return view('pages.tables');})->name('table');
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::post('profile' , ['as' => 'photo.update', 'uses' => 'UsersDetailsController@store']);
    Route::post('project/{id_kelompok}/{id_project_details}',['as' => 'project.nilai.update', 'uses'=>'KelompokController@isiNilai']);
    Route::get('export_excel/{project}',['as' => 'nilai.export', 'uses' => 'ProjectQuizController@export_excel']);
    Route::get('nilai/{project}/',['as' => 'nilai.index', 'uses'=>'ProjectQuizController@index']);
    Route::post('quiz/{project}/',['as' => 'quiz.insert', 'uses'=>'ProjectQuizController@insert']);
});


Auth::routes();
Auth::routes(['verify' => true]);
