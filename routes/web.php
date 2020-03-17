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

Route::resource('/', 'Frontend\HomeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix'=>'admin','namespace'=>'Backend'],function(){

     //USERS ROUTES
    Route::get('/users','UsersController@index')->name('admin.users.list');
    Route::get('/users/create', 'UsersController@create')->name('admin.users.create');
    Route::post('/users/store', 'UsersController@store')->name('admin.users.store');
    Route::get('/users/delete/{user_id}', 'UsersController@delete')->name('admin.users.delete');
    Route::get('/users/edit/{user_id}', 'UsersController@edit')->name('admin.users.edit');
    Route::post('/users/update/{user_id}', 'UsersController@update')->name('admin.users.update');


    //FILES ROUTES 
    Route::get('/files', 'FilesController@index')->name('admin.files.list');

    Route::get('/files/create', 'FilesController@create')->name('admin.files.create');

    Route::post('/files/create', 'FilesController@store')->name('admin.files.store');
    Route::get('/files/edit/{file_id}', 'FilesController@edit')->name('admin.files.edit');
    Route::post('/files/update/{file_id}', 'FilesController@update')->name('admin.files.update');


    //PLANS  ROUTES 

    Route::get('/plans', 'PlansController@index')->name('admin.plans.list');
    Route::get('/plans/create', 'PlansController@create')->name('admin.plans.create');
    Route::post('/plans/create', 'PlansController@store')->name('admin.plans.store');
    Route::get('/plans/edit/{plan_id}', 'PlansController@edit')->name('admin.plans.edit');
    Route::post('/plans/update/{plan_id}', 'PlansController@update')->name('admin.plans.update');
    Route::get('/plans/delete/{plan_id}', 'PlansController@delete')->name('admin.plans.delete');

    //PACKAGES  ROUTES 

    Route::get('/packages', 'PackagesController@index')->name('admin.packages.list');
    Route::get('/packages/create', 'PackagesController@create')->name('admin.packages.create');
    Route::post('/packages/create', 'PackagesController@store')->name('admin.packages.store');
    Route::get('/packages/edit/{package_id}', 'PackagesController@edit')->name('admin.packages.edit');
    Route::post('/packages/update/{package_id}', 'PackagesController@update')->name('admin.packages.update');
    Route::get('/packages/delete/{package_id}', 'PackagesController@delete')->name('admin.packages.delete');
    Route::get('/packages/sync_files/{package_id}', 'PackagesController@syncFiles')->name('admin.packages.sync_files');
    Route::post('/packages/sync_files/{package_id}', 'PackagesController@updateSyncFiles')->name('admin.packages.sync_files');

    //PAYMENTS  ROUTES 

    Route::get('/payments', 'PaymentController@index')->name('admin.payments.list');
    /*Route::get('/payments/create', 'PaymentController@create')->name('admin.payments.create');
    Route::post('/payments/create', 'PaymentController@store')->name('admin.payments.store');
    Route::get('/payments/edit/{payment_id}', 'PaymentController@edit')->name('admin.payments.edit');
    Route::post('/payments/update/{payment_id}', 'PaymentController@update')->name('admin.payments.update');*/
    Route::get('/payments/delete/{payment_id}', 'PaymentController@delete')->name('admin.payments.delete');
   

});




