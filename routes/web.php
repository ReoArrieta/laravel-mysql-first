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
    return view('welcome');
});

Route::get('saludo', 'MiPrimerController@saludo')->name('name');
Route::get('perfil', 'MiPrimerController@perfil')->name('perfil');
Route::resource('/apprentices', 'ApprenticeController');
Route::resource('/pets', 'PetController');
Route::resource('/students', 'StudentController');

// rutas para crud de tabla estudiante

// Route::post('createStudent', 'MiPrimerController@createStudent')->name('createStudent');
// Route::get('readStudent', 'MiPrimerController@readStudent')->name('readStudent');
// Route::put('updateStudent', 'MiPrimerController@updateStudent')->name('updateStudent');
// Route::delete('deleteStudent', 'MiPrimerController@deleteStudent')->name('deleteStudent');



// php artisan make:controller ShowProfile --resource
// php artisan route:list -> para ver las rutas de laravel
// php artisan make:migration create_pets_table --create=pets -> crear migraciones
// php artisan make:model Apprentice
