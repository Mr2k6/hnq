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

/*
 * Route index controller
 */
Route::get('/','IndexController@Index');
$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');
$this->post('/register','Auth\RegisterController@register');
$this->post('/login','Auth\LoginController@login');
/*
 * Route admin controller
 */

Auth::routes();
Route::get('/admin','AdminController@Index');

