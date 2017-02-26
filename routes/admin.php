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
Route::group(['namespace' => 'Admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');

    Route::get('/login', function () {
        return 'login';
    });

    Route::group(['prefix' => 'client'], function () {
        Route::get('/', 'ClientController@index')->name('admin.client.list');
        Route::get('/add', 'ClientController@add')->name('admin.client.add');
    });
});

