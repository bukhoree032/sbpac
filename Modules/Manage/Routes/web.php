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

Route::get('pages/manage_Household', 'HouseholdController@index')->name('index.household');

Route::prefix('manage')->name('manage.')->group(function() {
    Route::get('/pages/create-household', 'HouseholdController@create')->name('create.household');
    Route::post('/pages/insert-household', 'HouseholdController@insert')->name('insert.household');

    Route::get('/pages/edit-household/{id}/', 'HouseholdController@Edit')->name('edit.household');
    Route::post('/pages/update-household/{id}/', 'HouseholdController@Update')->name('update.household');
    
    Route::get('/pages/detail-household/{id}/', 'HouseholdController@Detail')->name('detail.household');
});
