<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'notification'], function () {
        Route::get('test', function () {
            echo "It worked!";
        });
    });
});

