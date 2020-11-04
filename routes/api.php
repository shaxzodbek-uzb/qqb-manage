<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group([
  'middleware' => 'api',
  'namespace' => 'Api'
], function ($router) {
	// Route::get('/history', 'Api\BankHistoryController@history');
	// Route::get('/branches', 'Api\BranchesController@branches');
	// Route::get('/currency', 'Api\CurrencyController@currency');
	// Route::get('/faqs', 'Api\FaqsController@faqs');
	// Route::get('/financial-performances', 'Api\FinancialPerformanceController@financial_performances');
	// Route::get('/news', 'Api\NewsController@news');
	Route::resource('pages', 'PageController');
	Route::resource('deposits', 'DepositController');
	Route::resource('galleries', 'GalleryController');
	Route::resource('documents', 'DocumentController');
	Route::resource('document-types', 'DocumentTypeController');
	Route::resource('tariffs', 'TariffController');
	Route::resource('tariff-types', 'TariffTypeController');
	Route::resource('menus', 'MenuController');
	Route::resource('news', 'NewsController');
	Route::resource('credits', 'CreditController');
	Route::resource('cards', 'CardController');
	Route::resource('vacancy', 'VacancyController');
	Route::resource('staff', 'StaffController');
	Route::resource('deposit', 'DepositController');
	Route::get('view/{slug}', 'PageController@view');
});