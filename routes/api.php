<?php

use Illuminate\Http\Request;

Route::group(array('api'), function() {
    Route::resource('images', 'ImageController');
});
