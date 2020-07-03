<?php

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
    return view('index');
});
Route::get('/pertanyaan/create', 'questionController@create'); //menampilkan halaman form
Route::post('/pertanyaan', 'questionController@store'); //mengirim data
Route::get('/pertanyaan', 'questionController@index'); //menampilkan tabel pertanyaan
Route::get('/pertanyaan/{id}', 'questionController@show'); //menampilkan detail pertanyaan berdasarkan id
Route::get('/pertanyaan/{id}/edit', 'questionController@edit'); //menampilkan form edit pertanyaan
Route::put('/pertanyaan/{id}', 'questionController@update'); //menyimpan perubahan pertanyaan
Route::delete('/pertanyaan/{id}', 'questionController@destroy'); //menghapus data pertanyaan berdasarkan id
Route::get('/jawaban/{pertanyaan_id}', 'answerController@index'); //menampilkan jawaban berdasarkan id pertanyaan
Route::Post('/jawaban/{pertanyaan_id}', 'answerController@store'); //menambahkan jawaban berdasarkan id pertanyaan
