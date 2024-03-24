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
Route::get('/condominio/{id}', [CondominioController::class, 'showCondominio']);
Route::get('/perfil-condominio/{id}', [CondominioController::class, 'showProfileCondominio']);
Route::get('/avisos/{id}', [CondominioController::class, 'showNotice']);
Route::get('/reuniões/{id}', [CondominioController::class, 'showMeeting']);
Route::get('/moradores/{id}', [CondominioController::class, 'showResident']);
Route::get('/blocos', [CondominioController::class, 'showBlock']);
Route::get('/mensagens/{id}', [CondominioController::class, 'showMessage']);
Route::get('/admin/{id}', [CondominioController::class, 'showAdmin']);
Route::get('/morador/{id}', [CondominioController::class, 'showHomeResident']);
Route::get('/perfil-morador/{id}', [CondominioController::class, 'showResidentProfile']);
Route::get('/comprovativos/{id}', [CondominioController::class, 'showResidentFee']);
Route::get('/taxa-condominio/{id}', [CondominioController::class, 'showpayResidentFee']);
Route::get('visualizar-pdf/{id}', [CondominioController::class, 'showPdf'])->name('visualizar_pdf');
Route::get('/reservas/{id}', [CondominioController::class, 'showBooking']);
Route::get('/pessoal', [CondominioController::class, 'showPersonForm']);
Route::get('/empresarial', [CondominioController::class, 'showCompanyForm']);
Route::get('/condomínios/{id}', [CondominioController::class, 'showAdminCondominio']);
Route::get('/perfil-admin/{id}', [CondominioController::class, 'showAdminProfile']);
Route::get('/contracto-pessoal/{id}/{adminId}', [CondominioController::class, 'showPersonalContract']);
Route::get('/contracto-empresa/{id}/{adminId}', [CondominioController::class, 'showBusinessContract']);
Route::get('/cadastrar-morador/{id}', [CondominioController::class, 'showRegisterResident']);
Route::get('/contracto-morador/{id}/{ownerId}', [CondominioController::class, 'showResidentForm']);
Route::get('/aviso/{id}/{ownerId}', [CondominioController::class, 'showCondominioNotice']);
Route::get('/reunião/{id}/{ownerId}', [CondominioController::class, 'showCondominioMeeting']);
Route::get('/mensagem-morador/{residentId}/{ownerId}', [CondominioController::class, 'showResidentMessage']);
Route::get('/morador-mensagem/{residentId}', [CondominioController::class, 'showMessageResident']);
Route::get('/reserva-morador/{id}', [CondominioController::class, 'showResidentBooking']);
Route::get('/morador-reserva/{id}', [CondominioController::class, 'showBookingResident']);
Route::post('/login', [CondominioController::class, 'login']);
Route::post('/logout', [CondominioController::class, 'logout']);
Route::post('/cadastrar-condominio-contracto-pessoal', [CondominioController::class, 'registerCondoPersonalContract']);
Route::post('/cadastrar-condominio-contracto-empresarial', [CondominioController::class, 'registerCondoBusinessContract']);
Route::post('/cadastrar-morador', [CondominioController::class, 'registerResident']);
Route::post('/enviar-aviso', [CondominioController::class, 'sendNotice']);
Route::post('/marcar-reunião', [CondominioController::class, 'scheduleMeeting']);
Route::post('/fazer-reserva', [CondominioController::class, 'scheduleBooking']);
Route::post('/enviar-mensagem', [CondominioController::class, 'sendMessage']);
Route::post('/aceitar-reserva', [CondominioController::class, 'confirmBooking']);
Route::post('/negar-reserva', [CondominioController::class, 'denyBooking']);
Route::post('/enviar-comprovativo', [CondominioController::class, 'sendBankReceipt']);
Route::post('/validar-comprovativo', [CondominioController::class, 'approveBankReceipt']);
Route::post('/invalidar-comprovativo', [CondominioController::class, 'disapproveBankReceipt']);
Route::get('/pesquisar-morador/{resident_name}', [CondominioController::class, 'searchResident']);




