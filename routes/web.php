<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\site\xtrafer\HomeController@index')->name('home')->middleware(['injectFlgPage:home']);

Route::get('about_us', 'App\Http\Controllers\site\xtrafer\aboutController@index')->name('about_us')->middleware(['injectFlgPage:about_us']);

Route::get('about_us_details', 'App\Http\Controllers\site\xtrafer\aboutController@index')->name('about_us_details')->middleware(['injectFlgPage:about_us_details']);

Route::get('budget', 'App\Http\Controllers\site\xtrafer\BudgetController@index')->name('budget')->middleware(['injectFlgPage:budget']);

Route::get('budget/{id}', 'App\Http\Controllers\site\xtrafer\BudgetController@index')->name('budget')->middleware(['injectFlgPage:budget']);

Route::get('blog', 'App\Http\Controllers\site\xtrafer\BlogController@index')->name('blog')->middleware(['injectFlgPage:blog']);

Route::get('blog_details/{id}', 'App\Http\Controllers\site\xtrafer\BlogController@getPost')->middleware(['injectFlgPage:blog_details']);

Route::get('product_details/{id}', 'App\Http\Controllers\site\xtrafer\ProductController@getPost')->middleware(['injectFlgPage:product_details']);

Route::get('products', 'App\Http\Controllers\site\xtrafer\ProductController@index')->name('products')->middleware(['injectFlgPage:products']);


Route::get('contact', 'App\Http\Controllers\site\xtrafer\ContactController@index')->name('contact')->middleware(['injectFlgPage:contact']);

Route::post('contact', 'App\Http\Controllers\site\xtrafer\ContactController@store');

Route::get('search', 'App\Http\Controllers\site\xtrafer\SearchController@search')->middleware(['injectFlgPage:search']);

Route::get('faq', 'App\Http\Controllers\site\xtrafer\FaqController@index')->middleware(['injectFlgPage:faq']);

Route::get('support', 'App\Http\Controllers\site\xtrafer\SupportController@index')->middleware(['injectFlgPage:support']);

Route::get('manual', 'App\Http\Controllers\site\xtrafer\ManualController@index')->middleware(['injectFlgPage:manual']);

Route::get('term', 'App\Http\Controllers\site\xtrafer\TermController@index')->name('term')->middleware(['injectFlgPage:term']);

Route::get('privacy', 'App\Http\Controllers\site\xtrafer\PrivacyController@index')->name('privacy')->middleware(['injectFlgPage:privacy']);

Route::get('certified', 'App\Http\Controllers\site\xtrafer\PrivacyController@certified')->name('certified')->middleware(['injectFlgPage:certified']);

Route::get('register', 'App\Http\Controllers\site\xtrafer\RegisterController@index')->name('register')->middleware(['injectFlgPage:register']);

Route::post('register', 'App\Http\Controllers\site\xtrafer\RegisterController@store');

Route::get('lang/{lang}', 'App\Http\Controllers\site\xtrafer\LanguageController@switchLang')->name('lang.switch');

Route::get('/bilingualism', 'App\Http\Controllers\site\xtrafer\\BilingualismController@index');

// Route::get('/test', function () {
// 	App::setLocale('');

// });


