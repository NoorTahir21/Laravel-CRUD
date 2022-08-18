<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;
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
Route::post('/submit',[formcontroller::class, 'create'])->name('create');
Route::get('/fetch',[formcontroller::class, 'index'])->name('fetch');
Route::get('/', [formcontroller::class, 'index'])->name('fetch');
Route::get('/edit/{id}',[formcontroller::class,'edit']);
Route::post('/update/{id}',[formcontroller::class,'update']);
Route::get('/del/{id}',[formcontroller::class,'del']);