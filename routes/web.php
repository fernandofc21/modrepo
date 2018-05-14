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

Route::get('/', function () {
    return view('welcome');
});

/*Route::resource('inicio','HardwareController');
Route::resource('storages','StoragesController'); */

Route::get('inicio', 'HardwareController@index');
Route::get('search', 'HardwareController@index');
Route::get('show/{id}', 'HardwareController@show');

Route::get('storages', 'StoragesController@index');
Route::get('storages/{hardware_id}', 'StoragesController@show');

Route::get('softwares', 'SoftwaresController@index');
Route::get('softwares/{hardware_id}', 'SoftwaresController@show');

Route::get('printers', 'PrintersController@index');
Route::get('printers/{hardware_id}', 'PrintersController@show');

Route::get('devices', 'DevicesController@index');
Route::get('devices/{hardware_id}', 'DevicesController@show');

Route::get('drives', 'DrivesController@index');
Route::get('drives/{hardware_id}', 'DrivesController@show');

Route::get('inputs', 'InputsController@index');
Route::get('inputs/{hardware_id}', 'InputsController@show');

Route::get('ports', 'PortsController@index');
Route::get('ports/{hardware_id}', 'PortsController@show');

Route::get('networks', 'NetworksController@index');
Route::get('networks/{hardware_id}', 'NetworksController@show');

Route::get('videos', 'VideosController@index');
Route::get('videos/{hardware_id}', 'VideosController@show');

Route::get('monitors', 'MonitorsController@index');
Route::get('monitors/{hardware_id}', 'MonitorsController@show');


Route::get('pdfhardware/{id}', 'HardwareController@pdf');

Route::get('pdfpuertos/{hardware_id}', 'PortsController@pdf');

Route::get('pdfunidades/{hardware_id}', 'DrivesController@pdf');

