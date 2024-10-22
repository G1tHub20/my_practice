<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\CSVController;
use App\Http\Controllers\ProfileController;

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

// 1行ずつ
// Route::get('tests/customer', [CustomerController::class, 'index']);

// Route::resource('contacts', ContactFormController::class); //リソースコントローラ？

// // グループ化
Route::prefix('contacts') //頭に「contacts」が付いたら
    ->middleware(['auth']) //認証
    ->controller(ContactFormController::class) //コントローラ指定
    ->name('contacts.')
    ->group(function() {
        Route::get('/', 'index')->name('index'); //名前付きルート
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}', 'update')->name('update');
        Route::post('/{id}/destroy', 'destroy')->name('destroy');
    }
);

Route::get('myTest/csv', [CSVController::class, 'index']);
Route::post('myTest/csv', [CSVController::class, 'uploadCsv'])->name('uploadCsv');








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
