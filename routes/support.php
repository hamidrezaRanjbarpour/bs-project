<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TechnicalSupportController;

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

Route::group(['middleware' => ['role:technical_support']], function () {
    Route::get('', [TechnicalSupportController::class, 'index']);
    Route::get('ticket/{ticket}', [TechnicalSupportController::class, 'ticketDetails'])->name('support.ticket_details');
    Route::post('reply/ticket/{ticket}', [TechnicalSupportController::class, 'replyTicket'])->name('support.reply_ticket');
});
