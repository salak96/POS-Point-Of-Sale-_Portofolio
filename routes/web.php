<?php
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\produkController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard') ;
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/kategori/data', [KategoriController::class,'data'])->name('kategori.data');
    Route::resource('/kategori',KategoriController::class);

    Route::get('/produk/data', [produkController::class,'data'])->name('produk.data');
    Route::resource('/produk',produkController::class);
});

require __DIR__.'/auth.php';