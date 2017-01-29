<?php

/* User Routes */
Route::get('/', 'VisitorController@index');
/*  Contact Us Route */
Route::post('/', 'MessageController@store');

Auth::routes();

/* Admin Routes */

Route::group(['middleware' => 'auth'], function(){
  Route::get('/adminpanel', 'HomeController@index');

  /* Managers Routes */
  Route::resource('/adminpanel/users', 'UsersController');
  Route::post('/adminpanel/users/changepassword', 'UsersController@updatePassowrd');
  Route::get('/adminpanel/users/{id}/delete', 'UsersController@destroy');

  /*  Site Setting Routes */
  Route::get('/adminpanel/sitesettings', 'SiteSettingController@index');
  Route::post('/adminpanel/sitesettings', 'SiteSettingController@store');

  /* Personal Profile Routes */
  Route::get('/adminpanel/profile', 'personalProfileController@index');
  Route::post('/adminpanel/profile', 'personalProfileController@store');

  /* Projects Routes */
  Route::resource('/adminpanel/projects', 'ProjectController');
  Route::get('/adminpanel/projects/{id}/delete', 'ProjectController@destroy');

  /* Skills Routes */
  Route::resource('/adminpanel/skills', 'SkillController');
  Route::get('/adminpanel/skills/{id}/delete', 'SkillController@destroy');

  /* Main Images Routes */
  Route::resource('/adminpanel/image', 'MainImagesController');

  /* Messages Routes */
  Route::get('/adminpanel/messages', 'MessageController@index');
  Route::get('/adminpanel/messages/{id}/show', 'MessageController@show');
  Route::get('/adminpanel/messages/{id}/delete', 'MessageController@destroy');

  /* Social Links Routes */
  Route::resource('/adminpanel/social', 'SocialController');
  Route::get('/adminpanel/social/{id}/delete', 'SocialController@destroy');

});
