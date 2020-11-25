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

use QQB\Mail\Services\MailService;
use App\News;

Route::get('/mail', function () {
    $service = app()->make(MailService::class);
    $service->sendNews(News::first());
    return view('welcome');
});
Route::get('locale/{locale}','LanguageController')->name('locale.change');