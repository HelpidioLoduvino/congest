<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CondominioController;
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

Route::get('/', [CondominioController::class, 'index']);
Route::get('/condominio', [CondominioController::class, 'showCondominio']);
Route::get('/avisos', [CondominioController::class, 'showNotice']);
Route::get('/reuniões', [CondominioController::class, 'showMeeting']);
Route::get('/moradores', [CondominioController::class, 'showResident']);
Route::get('/blocos', [CondominioController::class, 'showBlock']);
Route::get('/reclamações', [CondominioController::class, 'showComplaint']);
Route::get('/reclamação', [CondominioController::class, 'showComplaintLetter']);
Route::get('/mensagens', [CondominioController::class, 'showMessage']);
Route::get('/mensagem', [CondominioController::class, 'showMessageLetter']);
Route::get('/admin', [CondominioController::class, 'showAdmin']);
Route::get('/morador', [CondominioController::class, 'showHomeResident']);
Route::get('/comprovativos', [CondominioController::class, 'showResidentFee']);
Route::get('/taxas', [CondominioController::class, 'showValidResidentFee']);
Route::get('/reservas', [CondominioController::class, 'showBooking']);
Route::get('/pessoal', [CondominioController::class, 'showPersonForm']);
Route::get('/empresarial', [CondominioController::class, 'showCompanyForm']);
Route::get('/condomínios', [CondominioController::class, 'showAdminCondominio']);



