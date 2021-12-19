<?php

use App\Http\Controllers\KelolaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\StokController;
use App\Models\Produk;
use App\Models\Penjualan;

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
        $datas = Produk::paginate(8);

        return view('welcome',compact(
            'datas'
        ));
})->name('main');

Route::get('/product', [App\Http\Controllers\BasicController::class, 'index'])->name('produk');
Route::get('/product/cari', [App\Http\Controllers\BasicController::class, 'cari'])->name('produk');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('produk',ProdukController::class);
Route::get('/produk/cari',[ProdukController::class, 'cari']);
Route::resource('kelola',KelolaController::class);
Route::resource('stok',StokController::class);

Route::get('/exportData',[ProdukController::class,'exportData'])->name('exportData');

Route::get('/prods/{id}', function ($id) {
    $post = Produk::with('penjualan')->find($id);
    return response()->json($post, 200);
});
