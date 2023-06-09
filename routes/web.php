<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ScoreRecordView;
use App\Http\Controllers\ScoreCountingController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [ScoreCountingController::class, 'index'])->name('dashboard');
    Route::get('/reset-score', [ScoreCountingController::class, 'resetScore'])->name('reset_score');
    Route::post('/update-score', [ScoreCountingController::class, 'updateScore'])->name('update_score');
    Route::post('/minus-score', [ScoreCountingController::class, 'minusScore'])->name('minus_score');
    Route::post('/save-score-record', [ScoreCountingController::class, 'saveScoreRecord'])->name('save_score_record');

    Route::get('/score/record', ScoreRecordView::class)->name('score_record');
});


require __DIR__ . '/auth.php';
