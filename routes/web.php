<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CVController;
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
    return redirect('/certificate');
});

// certificate
Route::get('/certificate', [CertificateController::class, 'index']);
Route::get('/certificate/add-cert', [CertificateController::class, 'create']);
Route::post('/certificate', [CertificateController::class, 'store']);
Route::get('/certificate/pdf/{id}', [CertificateController::class, 'pdf']);
Route::get('/certificate/pdf2/{id}', [CertificateController::class, 'pdf2']);

// cv
Route::get('/cv', [CVController::class, 'index']);
Route::get('/cv/download_cv', [CVController::class, 'pdf']);
Route::get('/cv/download_cv1', [CVController::class, 'pdf1']);
Route::get('/cv/download_cv2', [CVController::class, 'pdf2']);
Route::post('/cv/datadiri/{id}', [CVController::class, 'store_biodata']);
Route::post('/cv/pendidikan', [CVController::class, 'store_education']);
Route::post('/cv/seminar_training', [CVController::class, 'store_seminar']);
Route::post('/cv/proyek', [CVController::class, 'store_project']);
Route::post('/cv/org', [CVController::class, 'store_organization']);

