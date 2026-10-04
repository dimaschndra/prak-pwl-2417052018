<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{name?}/{npm?}/{kelas?}', [ProfileController::class, 'profile'])->name('profile');

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/matakuliah', [MataKuliahController::class, 'index']);
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.store');

Route::get('/api/db-ping', function () {
    try {
        $start = microtime(true);
        DB::select('SELECT 1');
        $latency = round((microtime(true) - $start) * 1000);
        return response()->json([
            'status' => 'connected',
            'latency' => max(1, (int)$latency),
            'port' => config('database.connections.pgsql.port', 5432),
            'database' => config('database.connections.pgsql.database', 'pwl_db')
        ]);
    } catch (\Throwable $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage()
        ], 500);
    }
});