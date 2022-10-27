<?php

use App\Http\Controllers\FavComController;
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

Route::get('/', [FavComController::class, 'welcome']) -> name('welcome');
    // Formation
Route::get('Hottelerie_Restauration', [FavComController::class, 'fHottelerieRestauration']) -> name('formation.Hot');
Route::get('Patisserie', [FavComController::class, 'fPatisserie']) -> name('formation.Pat');

    // Service
Route::get('Evenementiel', [FavComController::class, 'sEvenementiel']) -> name('Services.Evenementiel');
Route::get('Hottelerie', [FavComController::class, 'sHottelerie']) -> name('Services.Hottelerie');

    // About
Route::get('About', [FavComController::class, 'about']) -> name('About');

    // Contact
Route::get('Contact', [FavComController::class, 'contact']) -> name('contact');
Route::post('Contact', [FavComController::class, 'send_mail']) -> name('addcontact');
 // detailCuisine
Route::get('detailCuisine', [FavComController::class, 'detailCuisinegénérale']) -> name('detailCuisinegénérale');