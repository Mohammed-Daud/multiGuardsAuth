<?php
Route::prefix('back-end')->name('backend.auth.')->namespace('Backend\Auth')->group(function(){

    //Backend Login Routes
    Route::get('/login','BkLoginController@showLoginForm')->name('login');
    Route::post('/login','BkLoginController@login');
    Route::post('/logout','BkLoginController@logout')->name('logout');

    //Backend Forgot Password Routes
    Route::get('/password/reset','BkForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email','BkForgotPasswordController@sendResetLinkEmail')->name('password.email');

    //Backend Reset Password Routes
    Route::get('/password/reset/{token}','BkResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset','BkResetPasswordController@reset')->name('password.update');

    //http://localhost/back-end/password/reset/077553faced2c2583efdcadeb12ab0aca44d03b0ba2f6d6e2fc247ebcbbd9cf1?email=daud.csbt%40gmail.com

    /*
    https://ysk-override.com/Multi-Auth-in-laravel-54-Reset-Password-20170205/
    https://stackoverflow.com/questions/48119892/laravel-send-password-reset-link-to-a-separate-authentication-guard
    https://medium.com/@sagarmaheshwary31/laravel-multiple-guards-authentication-setup-and-login-2761564da986
    */

});