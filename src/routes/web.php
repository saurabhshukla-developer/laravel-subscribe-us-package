<?php

use Illuminate\Http\Request;

Route::group(["namespace"=>"SaurabhshuklaDeveloper\LaravelSubscribeUs\Http\Controllers"],function() {

    Route::get('subscribe-us','SubscribeUsController@index')->name('subscribe-us');

    Route::post('subscribe-us','SubscribeUsController@submitSubscriptionForm')->name('subscribe-us');

});
