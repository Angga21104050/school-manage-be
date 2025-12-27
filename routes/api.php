<?php

use App\Http\Controllers\Api\GuruController;
use App\Http\Controllers\Api\KelasController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\SiswaController;
use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/{kelas}', [KelasController::class, 'show']);

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/{siswa}', [SiswaController::class, 'show']);

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/{guru}', [GuruController::class, 'show']);

Route::get('/report/siswa-per-kelas', [ReportController::class, 'siswaPerKelas']);
Route::get('/report/guru-per-kelas', [ReportController::class, 'guruPerKelas']);
Route::get('/report/kelas-siswa-guru', [ReportController::class, 'kelasSiswaGuru']);
