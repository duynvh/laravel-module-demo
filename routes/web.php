<?php

Route::group(['namespace' => 'Module\Demo\Http\Controllers'], function () {
    Route::get('/demo', 'DemoController@index');
});