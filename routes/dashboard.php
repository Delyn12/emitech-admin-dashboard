<?php
use Illuminate\Support\Facades\Routes;

Route::group(['namespace' => 'Emitech\Dashboard\Http\Controllers',
					'middleware' => 'web',
			 	], function(){
	
	Route::get('/', [
		'uses' => 'DashboardController@index',
		'as' => 'home'
	]);
});

?>