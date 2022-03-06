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

Route::get('about', 'site\xtrafer\AboutController@index')->name('about')->middleware(['injectFlgPage:about']);

Route::get('about_details', 'site\xtrafer\AboutController@index')->name('about_details')->middleware(['injectFlgPage:about_details']);

Route::get('service_details', 'site\xtrafer\ServiceController@index')->name('service_details')->middleware(['injectFlgPage:service_details']);

Route::get('budget', 'site\xtrafer\BudgetController@index')->name('budget')->middleware(['injectFlgPage:budget']);

Route::get('budget/{id}', 'site\xtrafer\BudgetController@index')->name('budget')->middleware(['injectFlgPage:budget']);

Route::get('blog', 'site\xtrafer\BlogController@index')->name('blog')->middleware(['injectFlgPage:blog']);

Route::get('/blog_details/{id}', 'site\xtrafer\BlogController@getPost')->name('blog_details')->middleware(['injectFlgPage:blog_details']);

Route::get('product_details/{id}', 'site\xtrafer\ProductController@getPost')->middleware(['injectFlgPage:product_details']);

Route::get('products', 'site\xtrafer\ProductController@index')->name('products')->middleware(['injectFlgPage:products']);


Route::get('contact', 'site\xtrafer\ContactController@index')->name('contact')->middleware(['injectFlgPage:contact']);

Route::get('experts', 'site\xtrafer\ExpertsController@index')->name('experts')->middleware(['injectFlgPage:experts']);


// Route::post('contact', 'site\xtrafer\ContactController@store');

Route::get('search', 'site\xtrafer\SearchController@search')->middleware(['injectFlgPage:search']);

Route::get('faq', 'site\xtrafer\FaqController@index')->middleware(['injectFlgPage:faq']);

Route::get('support', 'site\xtrafer\SupportController@index')->middleware(['injectFlgPage:support']);

Route::get('manual', 'site\xtrafer\ManualController@index')->middleware(['injectFlgPage:manual']);

Route::get('terms', 'site\xtrafer\TermController@index')->name('terms')->middleware(['injectFlgPage:terms']);

Route::get('brands', 'site\xtrafer\BrandsController@index')->name('brands')->middleware(['injectFlgPage:brands']);

Route::get('privacy', 'site\xtrafer\PrivacyController@index')->name('privacy')->middleware(['injectFlgPage:privacy']);

Route::get('certified', 'site\xtrafer\PrivacyController@certified')->name('certified')->middleware(['injectFlgPage:certified']);

Route::get('register', 'site\xtrafer\RegisterController@index')->name('register')->middleware(['injectFlgPage:register']);

Route::post('register', 'site\xtrafer\RegisterController@store');

Route::get('lang/{lang}', 'site\xtrafer\LanguageController@switchLang')->name('lang.switch');

Route::get('/bilingualism', 'site\xtrafer\BilingualismController@index');



//rota de envio de email

Route::get('sendContact', function(){

	$data = new stdClass();
	$data->name = '';
	$data->email = '';

	return new \App\Mail\SendMail($data);
});

Route::get('sendQuote', function(){

	$data = new stdClass();
	$data->name = '';
	$data->email = '';

	return new \App\Mail\SendQuote($data);
});

Route::post('sendContact', 'site\xtrafer\EmailController@contact');

Route::post('sendQuote', 'site\xtrafer\EmailController@quote');

Route::post('sendNewsletter', 'site\xtrafer\EmailController@newsletter');


//rota de envio de comentarios do blog

Route::post('sendComment', 'site\xtrafer\CommentController@post');

// Route::get('/test', function () {
// 	App::setLocale('');

// });


