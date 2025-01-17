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
	// Route::get('/financial-performances', 'Api\FinancialPerformanceController@financial_performances');
	// Route::get('/news', 'Api\NewsController@news');
	Route::resource('appeals', 'AppealController');
	Route::resource('appeal-types', 'AppealTypeController');
	Route::resource('anual-reports', 'AnualReportController');
	Route::resource('faqs', 'FaqsController');
	Route::resource('bank-histories', 'BankHistoryController');
	Route::resource('branches', 'BrancheController');
	Route::resource('cards', 'CardController');
	Route::resource('cash-machines', 'CashMachineController');
	Route::resource('credits', 'CreditController');
	Route::resource('currency-rates/last', 'LastCurrencyRateController');
	Route::resource('currency-rates', 'CurrencyRateController');
	Route::resource('deposit', 'DepositController');
	Route::resource('deposits', 'DepositController');
	Route::resource('deposit-types', 'DepositTypeController');
	Route::resource('documents', 'DocumentController');
	Route::resource('document-types', 'DocumentTypeController');
	Route::resource('financial-performances', 'FinancialPerformanceController');
	Route::resource('galleries', 'GalleryController');
	Route::resource('menus', 'MenuController');
	Route::resource('news', 'NewsController');
	Route::resource('news-categories', 'NewsCategoryController');
	Route::resource('pages', 'PageController');
	Route::resource('polls', 'PollController');
	Route::resource('staffs', 'StaffController');
	Route::resource('subscribers', 'SubscriberController');
	Route::resource('tariffs', 'TariffController');
	Route::resource('tariff-types', 'TariffTypeController');
	Route::resource('vacancy', 'VacancyController');
	Route::resource('vacancies', 'VacancyController');
	Route::get('view/{slug}', 'PageController@view');
});