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
//
Route::get('/', function () {
    return view('test');
});



Route::group(['prefix'=>'user'],function (){
    Route::get('/',['as'=>'user.index','uses'=>'UserController@index']);
    Route::get('edit',['as'=>'user.edit','uses'=>'UserController@edit']);

});

Route::group(['prefix'=>'department'],function(){
    Route::get('/',['as'=>'department.index','uses'=>'DepartmentController@index']);
    Route::get('create',['as'=>'department.create','uses'=>'DepartmentController@create']);
    Route::post('create',['as'=>'department.store','uses'=>'DepartmentController@store']);
    Route::get('edit/{id}',['as'=>'department.edit','uses'=>'DepartmentController@edit']);
    Route::put('edit/{id}',['as'=>'department.update','uses'=>'DepartmentController@update']);
    Route::get('addActivity',['as'=>'department.addActivity','uses'=>'DepartmentController@addActivity']);

});
Route::get('lang/{lang?}', ['as' => 'language.change', 'uses' => 'LanguageController@change']);


/**
 *
 * user route
 */
Route::group(['prefix'=>'user'],function (){
    Route::get('/',['as'=>'user.index','uses'=>'UserController@index']);
    Route::get('edit',['as'=>'user.edit','uses'=>'UserController@edit']);

});
Route::get('lang/{lang?}', ['as' => 'language.change', 'uses' => 'LanguageController@change']);

/**
 *
 *
 * admins routes
 */

Route::group(['prefix' => 'admins',], function () {
    Route::get('index', ['uses' => 'AdminsController@index', 'as' => 'admins.index']);
    Route::get('create', ['uses' => 'AdminsController@create', 'as' => 'admins.create']);
    Route::post('create', ['uses' => 'AdminsController@store', 'as' => 'admins.store']);
    Route::get('destroy/{id?}', ['uses' => 'AdminsController@destroy', 'as' => 'admins.destroy']);
    Route::get('edit/{id}', ['uses' => 'AdminsController@edit', 'as' => 'admins.edit']);
    Route::put('edit/{id}', ['uses' => 'AdminsController@update', 'as' => 'admins.update']);

});

/**
 * south routes
 *
 */
Route::group(['prefix' => 'south',], function () {
    Route::get('index', ['uses' => 'SouthController@index', 'as' => 'south.index']);
    Route::get('create', ['uses' => 'SouthController@create', 'as' => 'south.create']);
    Route::post('create/{id?}', ['uses' => 'SouthController@store', 'as' => 'south.store']);
    Route::get('destroy/{id?}', ['uses' => 'SouthController@destroy', 'as' => 'south.destroy']);

});

/**
 *
 * upload routes
 *
 */
Route::group(['prefix' => 'upload'], function () {
    Route::get('create', 'sliderController@create');
    Route::post('create', ['as' => 'slider.upload', 'uses' => 'SliderController@store']);
    Route::get('all', ['as' => 'image.index', 'uses' => 'SliderController@index']);
    Route::get('destroy/{id?}', ['as' => 'image.destroy', 'uses' => 'SliderController@destroy']);

});


/**
 *
 * colleages route
 */
Route::group(['prefix' => 'colleges'], function () {
    Route::get('create', 'CollegesController@create');
    Route::post('create', ['as' => 'colleges.add', 'uses' => 'CollegesController@store']);
});


/**
 * books route
 *
 */
Route::group(['prefix' => 'books'], function () {
    Route::get('create', 'bookController@create');
    Route::post('create', ['as' => 'book.create', 'uses' => 'bookController@store']);
    Route::get('all', ['as' => 'book.index', 'uses' => 'bookController@index']);

});

