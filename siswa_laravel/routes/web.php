<?php

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

    Route::get('/', 'homecontroller@login');
    Route::get('home','pagecontroller@homepage');
    Route::get('about','pagecontroller@about');

    Route::get('siswa','siswacontroller@siswa');
    Route::get('siswa/cetak_pdf','siswacontroller@cetak_pdf');
    Route::get('siswa/create','siswacontroller@create');
    Route::post('siswa','siswacontroller@store');
    Route::get('siswa/{siswa}','siswacontroller@show');
    Route::get('siswa/{siswa}/edit','siswacontroller@edit');
    Route::post('siswa/{siswa}/update','siswacontroller@update');
    Route::get('siswa/{siswa}/delete','siswacontroller@delete');

    Route::get('kelas','kelascontroller@kelas');
    Route::get('kelas/cetak_pdf','kelascontroller@cetak_pdf');
    Route::get('kelas/create','kelascontroller@create');
    Route::post('kelas','kelascontroller@store');
    Route::get('kelas/{guru}','kelascontroller@show');
    Route::get('kelas/{kelas}/edit','kelascontroller@edit');
    Route::post('kelas/{kelas}/update','kelascontroller@update');
    Route::get('kelas/{kelas}/delete','kelascontroller@delete');

    Route::get('guru','gurucontroller@guru');
    Route::get('guru/cetak_pdf','gurucontroller@cetak_pdf');
    Route::get('guru/create','gurucontroller@create');
    Route::post('guru','gurucontroller@store');
    Route::get('guru/{guru}','gurucontroller@show');
    Route::get('guru/{guru}/edit','gurucontroller@edit');
    Route::post('guru/{guru}/update','gurucontroller@update');
    Route::get('guru/{guru}/delete','gurucontroller@delete');

    Route::get('walikelas','walikelascontroller@walikelas');
    Route::get('walikelas/cetak_pdf','walikelascontroller@cetak_pdf');
    Route::get('walikelas/create','walikelascontroller@create');
    Route::post('walikelas','walikelascontroller@store');
    Route::get('walikelas/{walikelas}','walikelascontroller@show');
    Route::get('walikelas/{walikelas}/edit','walikelascontroller@edit');
    Route::post('walikelas/{walikelas}/update','walikelascontroller@update');
    Route::get('walikelas/{walikelas}/delete','walikelascontroller@delete');

    Route::get('form',function(){
        return view('page.formview');
    Route::get('/', 'kontak@index');
    });

    Auth::routes();

    Route::get('home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home');
