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
	// Route::get('/cards', 'Api\CardController@cards');
	// Route::get('/council-items', 'Api\CouncilItemsController@councilItems');
	// Route::get('/credits', 'Api\CreditController@credits');
	// Route::get('/currency', 'Api\CurrencyController@currency');
	// Route::get('/documents', 'Api\DocumentController@documents');
	// Route::get('/faqs', 'Api\FaqsController@faqs');
	// Route::get('/financial-performances', 'Api\FinancialPerformanceController@financial_performances');
	// Route::get('/news', 'Api\NewsController@news');
	Route::resource('pages', 'PageController');
});