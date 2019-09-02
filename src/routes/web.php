<?php 

Route::group([
  'namespace' => 'sBiswas\LaravelContactForm\Http\Controllers',
], function(){

  Route::get('contact', 'ContactContoller@index');
  Route::post('contact', 'ContactContoller@send')->name('submit_contact');

});