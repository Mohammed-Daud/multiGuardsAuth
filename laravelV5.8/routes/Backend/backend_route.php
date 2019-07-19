<?php
Route::prefix('back-end')->name('backend.')->middleware('auth:admin')->namespace('Backend')->group(function(){



    Route::get('dashboard','DashboardController@index')->name('dashboard');

});