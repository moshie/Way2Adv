<?php

Route::get('/', 'HomeController@init');

Route::post('contact_request','ContactController@getContactUsForm');