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

// Tienda virtual

Route::get('/admin/agregar/producto', 'PdfDrawController@index')->name('codcommerce_addproduc');
Route::get('/admin/productos', 'PdfDrawController@update')->name('codcommerce_products');
Route::get('/admin/editar/producto', 'PdfDrawController@updatefield')->name('codcommerce_editproduct');
Route::get('/admin/eliminar/producto', 'PdfDrawController@store')->name('codcommerce_deleteproduct');
