<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'PagesController@getIndex');
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('blog', [ 'as'=> 'blog.index', 'uses' => 'BlogController@getIndex' ]);
Route::get('about', 'PagesController@getAbout');
Route::get('music','PagesController@getMusic');
Route::get('contact','PagesController@getContact');
Route::resource('posts', 'PostController');
/*
|--------------------------------------------------------------------------
| Authentication Routes 
|--------------------------------------------------------------------------
| this routes handle the authentication of the users
| 
|
|
|
*/
/* Route::get('/', 'HomeController@index'); */
Route::get('logout','Auth\LoginController@logout');
/*
|--------------------------------------------------------------------------
| Registration Routes 
|--------------------------------------------------------------------------
| this routes handle the registration of the user 
| 
|
|
|
*/

/* Route::get('/auth/register','Auth\RegisterController@register'); */
/* Route::post('/auth/register','Auth\RegisterController@register'); */

/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| 
|
|
|
*/
Auth::routes();
