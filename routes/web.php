<?php





Route::get('/', function () {

  return view('ver1.home');
});
Route::get('ver2', function () {

  return view('ver2.home');
});
Route::get('ver3', function () {

  return view('MySecController@getGallery');
});
