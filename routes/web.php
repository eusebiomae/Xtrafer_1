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

Route::get('/', 'site\xtrafer\HomeController@index')->name('home')->middleware(['injectFlgPage:home']);

Route::get('about', 'site\xtrafer\aboutController@index')->name('about')->middleware(['injectFlgPage:about']);

Route::get('about_us_details', 'site\xtrafer\aboutController@index')->name('about_us_details')->middleware(['injectFlgPage:about_us_details']);

Route::get('budget', 'site\xtrafer\BudgetController@index')->name('budget')->middleware(['injectFlgPage:budget']);

Route::get('budget/{id}', 'site\xtrafer\BudgetController@index')->name('budget')->middleware(['injectFlgPage:budget']);

Route::get('blog', 'site\xtrafer\BlogController@index')->name('blog')->middleware(['injectFlgPage:blog']);

Route::get('blog_details/{id}', 'site\xtrafer\BlogController@getPost')->middleware(['injectFlgPage:blog_details']);

Route::get('product_details/{id}', 'site\xtrafer\ProductController@getPost')->middleware(['injectFlgPage:product_details']);

Route::get('products', 'site\xtrafer\ProductController@index')->name('products')->middleware(['injectFlgPage:products']);


Route::get('contact', 'site\xtrafer\ContactController@index')->name('contact')->middleware(['injectFlgPage:contact']);

Route::post('contact', 'site\xtrafer\ContactController@store');

Route::get('search', 'site\xtrafer\SearchController@search')->middleware(['injectFlgPage:search']);

Route::get('faq', 'site\xtrafer\FaqController@index')->middleware(['injectFlgPage:faq']);

Route::get('support', 'site\xtrafer\SupportController@index')->middleware(['injectFlgPage:support']);

Route::get('manual', 'site\xtrafer\ManualController@index')->middleware(['injectFlgPage:manual']);

Route::get('term', 'site\xtrafer\TermController@index')->name('term')->middleware(['injectFlgPage:term']);

Route::get('privacy', 'site\xtrafer\PrivacyController@index')->name('privacy')->middleware(['injectFlgPage:privacy']);

Route::get('certified', 'site\xtrafer\PrivacyController@certified')->name('certified')->middleware(['injectFlgPage:certified']);

Route::get('register', 'site\xtrafer\RegisterController@index')->name('register')->middleware(['injectFlgPage:register']);

Route::post('register', 'site\xtrafer\RegisterController@store');

Route::get('lang/{lang}', 'site\xtrafer\LanguageController@switchLang')->name('lang.switch');

Route::get('/bilingualism', 'site\xtrafer\\BilingualismController@index');

// Route::get('/test', function () {
// 	App::setLocale('');

// });


