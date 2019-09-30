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

Route::get('/', function () {
    return view('welcome');
});

Route::get('aditi','PnController@pn');//url-pn and controller
Route::get('TRY','TryController@Try');//URL=TRY and controller is TryController and @Try is the name of function that is in controller
Route::get('Title','PnController@try');
Route::get('t','TController@t');



Route::get('about','PnController@about');
Route::get('courses','PnController@courses');
Route::get('teacher','PnController@teacher');
Route::get('pricing','PnController@pricing');
Route::get('blog','PnController@blog');
Route::get('contact','PnController@contact');



Route::get('login','adminController@login');
Route::get('register','adminController@register');
Route::get('dashboard','adminController@dashboard');
Route::get('add_student','adminController@student');
Route::get('view_student','adminController@view_student');
Route::get('add_teacher','adminController@add_teacher');
Route::get('view_teacher','adminController@view_teacher');


Route::get('using_array','pass_dataController@usingarray');
Route::get('if','conditionController@usingifcondition');
Route::get('else','conditionController@usingelsecondition');
Route::get('elseif','conditionController@aelseif');
Route::get('isset','conditionController@aisset');
Route::get('empty','conditionController@aempty');
Route::get('unless','conditionController@aunless');


Route::get('for','conditionController@bfor');
Route::get('foreach','conditionController@bforeach');
Route::get('forelse','conditionController@bforelse');
Route::get('while','conditionController@bwhile');
Route::get('loopindex','conditionController@loopindex');




Route::get('insert','dbController@queryrun');
Route::get('show','dbController@show');
Route::get('update','dbController@update');
Route::get('delete','dbController@delete');


Route::get('showdata','dbController@showdata');

Route::get('insert1','employeeController@insert');
Route::get('show1','employeeController@show');
Route::get('update1','employeeController@update');
Route::get('showdata1','employeeController@showdata');
Route::get('delete1','employeeController@delete');



