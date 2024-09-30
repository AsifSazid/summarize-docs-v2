<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SummaryDocsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/get-summary-pdf-download', [SummaryDocsController::class, 'pdfDownload'])->name('docSummary.pdfDownload');

Route::get('/get-summary', [SummaryDocsController::class, 'index'])->name('docSummary');

Route::get('/get-extracted-text', [SummaryDocsController::class, 'getExtractedText'])->name('getExtractedText');
Route::post('/store-extracted-text', [SummaryDocsController::class, 'storeExtractedText'])->name('storeExtractedText');

Route::get('/invoice-ocr', [SummaryDocsController::class, 'index'])->name('docSummary');

require __DIR__.'/auth.php';
