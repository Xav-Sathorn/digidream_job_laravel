<?php

use App\Http\Controllers\ListingController;
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

/* Common resources Routes:
index - Show all listings
show - Show single listing
create - Show form to create new Listing
edit - Show form to edit listing
update - Update listing
destroy - Delete Listing */



//All Listings
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/listings/create',  [ListingController::class, 'create']);

//Store Listing Data
Route::post('/listings',  [ListingController::class, 'store']);

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Single Listing
Route::get('/listings/{listing}',  [ListingController::class, 'show']);
