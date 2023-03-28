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

Route::get('/', [ScoreCountingController::class, 'index'])->name('dashboard');
Route::get('/reset-score', [ScoreCountingController::class, 'resetScore'])->name('reset_score');
Route::post('/update-score', [ScoreCountingController::class, 'updateScore'])->name('update_score');
Route::post('/minus-score', [ScoreCountingController::class, 'minusScore'])->name('minus_score');

require __DIR__ . '/auth.php';
