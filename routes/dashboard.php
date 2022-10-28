<?php
use Illuminate\Support\Facades\Routes;

Route::group(['namespace' => 'Emitech\Dashboard\Http\Controllers',
					'middleware' => 'web'
			 	], function(){
	
	Route::get('dashboard', [
		'uses' => 'DashboardController@index',
		'as' => 'dashboard'
	]);
});

?>