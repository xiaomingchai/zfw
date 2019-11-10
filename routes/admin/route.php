<?php
Route::group(['namespace'=>'admin','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('login',"LoginController@index")->name('login');
    Route::post('login',"LoginController@login")->name('login');
});

