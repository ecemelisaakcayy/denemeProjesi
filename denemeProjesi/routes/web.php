<?php

use Illuminate\Support\Facades\Route;

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


Route::prefix("admin")->group(function(){

    Route::get('/home', 'HomeController@index')->name("index");


Route::get('/blogs','Blogs\BlogController@getBlogs')->name("blogs");
Route::get('/blog-add','Blogs\BlogController@getBlogsAdd')->name("blog-add");
Route::get('/blog-category','Blogs\BlogController@getBlogsCategory')->name("blog-category");
Route::get('/blog-category-add','Blogs\BlogController@getBlogsCategoryAdd')->name("blog-category-add");
Route::get('/blog-edit','Blogs\BlogController@getBlogsEdit')->name("blog-edit");
Route::get('/blog-category-edit','Blogs\BlogController@getBlogsCategoryEdit')->name("blog-category-edit");


Route::get('/menus','Menus\MenusController@getMenus')->name("menus");
Route::get('/menu-add','Menus\MenusController@getMenusAdd')->name("menu-add");
Route::get('/menu-edit','Menus\MenusController@getPagesEdit')->name("menu-edit");



Route::get('/pages','Pages\PagesController@getPages')->name("pages");
Route::get('/page-add','Pages\PagesController@getPagesAdd')->name("page-add");
Route::get('/page-edit','Pages\PagesController@getPagesEdit')->name("page-edit");


Route::get('/sliders','Sliders\SliderController@getSliders')->name("sliders");
Route::get('/slider-add','Sliders\SliderController@getSlidersAdd')->name("slider-add");
Route::get('/slider-edit','Sliders\SliderController@getSlidersEdit')->name("slider-edit");



Route::get('/users','Users\UsersController@getUsers')->name("user");
Route::get('/user-add','Users\UsersController@getUsersAdd')->name("user-add");
Route::get('/user-edit','Users\UsersController@getUsersEdit')->name("user-edit");

});
