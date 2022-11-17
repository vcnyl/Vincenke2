<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Models\Task;
 

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

Route::get('/welcome', function
() { echo "Welcome";
}); 

Route::get('/show/{id}', function
($id) { echo "Nilai Parameter
Adalah ".$id; }); 

Route::get('/show/{id?}', function
($id=1) { echo "Nilai Parameter
Adalah ".$id; });

Route::get('/edit/{nama}', function ($nama) {
echo "Nama saya Adalah ".$nama; })->where('nama','[A-Za-z]+'); 

// Route::get('/index', function () {
// echo "<a href='".route('create')."'>Akses Route dengan nama </a>"; });
// Route::get('/create', function () {
// echo "Route diakses menggunakan nama"; })->name('create'); 

Route::get('/vincen',[ProdukController::class,'index']); 


Route::get('/produk',[ProdukController::class,'index']); 

Route::get('/produk/show',[ProdukController::class,'show']);

Route::get('/tasks', function () {
    return view('tasks', ['tasks' => Task::all()]);
});

//Eloquent
Route::get('/tampil',[ProdukController::class,'show_eloquent']);
Route::get('/insert',[ProdukController::class,'insert_eloquent']);
Route::get('/update',[ProdukController::class,'update_eloquent']);

//crud
Route::resource('/produk', BarangController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['logincheck::admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['logincheck:editor']], function () {
        Route::resource('editor', EditorController::class);
    });
});