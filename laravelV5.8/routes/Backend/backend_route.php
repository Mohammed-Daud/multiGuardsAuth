<?php
Route::prefix('back-end')->name('backend.')->namespace('Backend')->group(function(){



    Route::get('dashboard','DashboardController@index')->name('dashboard');

});