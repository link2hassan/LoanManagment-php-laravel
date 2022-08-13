<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/borrower_detail/{id}', 'LoanController@detail');
// Route::get('/download/{id}', 'DonerController@download');
Route::get('/doner_detail/{id}', 'DonerController@detail');
Route::get('/monthly_statement', 'ExpenceController@monthly');
Route::get('/monthly_pdf', 'ExpenceController@monthly_pdf');



Route::get('/borrower', 'BarrowerController@index');
Route::get('/create_borrower', 'BarrowerController@create');
Route::post('/create_borrower', 'BarrowerController@create');
Route::post('/update_borrower/{id}', 'BarrowerController@update');
Route::get('/update_borrower/{id}', 'BarrowerController@update');
Route::get('/delete_borrower/{id}', 'BarrowerController@delete');
Route::get('/borrower-details-pdf/{id}', 'BarrowerController@details_pdf');


Route::get('/doner', 'DonerController@index');
Route::get('/create_doner', 'DonerController@create');
Route::post('/create_doner', 'DonerController@create');
Route::post('/update_doner/{id}', 'DonerController@update');
Route::get('/update_doner/{id}', 'DonerController@update');
Route::get('/delete_doner/{id}', 'DonerController@delete');
Route::get('/doner-details-pdf/{id}', 'DonerController@details');


Route::get('/guarantor', 'GuarantorController@index');
Route::get('/create_guarantor', 'GuarantorController@create');
Route::post('/create_guarantor', 'GuarantorController@create');
Route::post('/update_guarantor/{id}', 'GuarantorController@update');
Route::get('/update_guarantor/{id}', 'GuarantorController@update');
Route::get('/delete_guarantor/{id}', 'GuarantorController@delete');

Route::get('/loans', 'LoanController@index');
Route::get('/create_loan', 'LoanController@create');
Route::post('/create_loan', 'LoanController@create');
Route::post('/update_loan/{id}', 'LoanController@update');
Route::get('/update_loan/{id}', 'LoanController@update');
Route::get('/delete_loan/{id}', 'LoanController@delete');

Route::get('/recovery', 'RecoveryController@index');
Route::get('/create_recovery', 'RecoveryController@create');
Route::post('/create_recovery', 'RecoveryController@create');
Route::post('/update_recovery/{id}', 'RecoveryController@update');
Route::get('/update_recovery/{id}', 'RecoveryController@update');
Route::get('/delete_recovery/{id}', 'RecoveryController@delete');

Route::get('/expence', 'ExpenceController@index');
Route::get('/create_expence', 'ExpenceController@create');
Route::post('/create_expence', 'ExpenceController@create');
Route::post('/update_expence/{id}', 'ExpenceController@update');
Route::get('/update_expence/{id}', 'ExpenceController@update');
Route::get('/delete_expence/{id}', 'ExpenceController@delete');

Route::get('/payment', 'PaymentController@index');
Route::get('/create_payment', 'PaymentController@create');
Route::post('/create_payment', 'PaymentController@create');
Route::post('/update_payment/{id}', 'PaymentController@update');
Route::get('/update_payment/{id}', 'PaymentController@update');
Route::get('/delete_payment/{id}', 'PaymentController@delete');

