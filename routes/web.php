<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\VoucherController;

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
// Route::resource('vouchers', VoucherController::class);
// Route::resource('comments', CommentController::class);


//voucher admin
Route::prefix('admin/vouchers')
    ->as('admin.vouchers.')
    ->group(function () {
        Route::get('/create',         [VoucherController::class, 'create'])->name('create');
        Route::post('/store',         [VoucherController::class, 'store'])->name('store');
        Route::get('/show/{voucher}', [VoucherController::class, 'show'])->name('show');
        Route::get('{voucher}/edit',  [VoucherController::class, 'edit'])->name('edit');
        Route::put('{voucher}',       [VoucherController::class, 'update'])->name('update');
        Route::delete('{voucher}',    [VoucherController::class, 'destroy'])->name('destroy');
    });

//comments admin
// Route::prefix('admin/comments')
    ->as('admin.comments.')
    ->group(function () {
        Route::get('/',               [CommentController::class, 'index'])->name('index');
        Route::post('/store',         [CommentController::class, 'store'])->name('store');
        Route::delete('/{comment}',   [CommentController::class, 'destroy'])->name('destroy');
    });

