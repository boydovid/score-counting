<?php

use App\Http\Controllers\ScoreCountingController;
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

Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/dashboard', [ScoreCountingController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/reset-score', [ScoreCountingController::class, 'resetScore'])->middleware(['auth'])->name('reset_score');
Route::post('/dashboard/update-score', [ScoreCountingController::class, 'updateScore'])->middleware(['auth']);
Route::post('/dashboard/minus-score', [ScoreCountingController::class, 'minusScore'])->middleware(['auth']);

require __DIR__ . '/auth.php';
