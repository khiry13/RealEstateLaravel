<?php

use App\Http\Controllers\AddpropertyController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\BuypropertyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyImageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/showpropdetail/{propId}', [HomeController::class, 'show']);

Route::get('/redirects', [HomeController::class, 'redirects']);

Route::get('/about', [HomeController::class, 'about']);
Route::get('/agents', [HomeController::class, 'agents']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/users', [AdminController::class, 'user']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);

Route::get('/property/{propertyId}/uploadimage', [PropertyImageController::class, 'index']);
Route::post('/property/{propertyId}/uploadimage', [PropertyImageController::class, 'store']);
Route::get('property-image/{propertyImageId}/delete', [PropertyImageController::class, 'destroy']);


Route::post('buyproperty', [BuypropertyController::class, 'store']);
Route::get('showmessages/{propId}', [BuypropertyController::class, 'showmessages']);
Route::delete('deletemessage/{id}', [BuypropertyController::class, 'destroy']);

Route::get('addproperty', [AddpropertyController::class, 'create']);
Route::post('storeproperty', [AddpropertyController::class, 'store']);
Route::get('showproperty', [AddpropertyController::class, 'show']);
Route::delete('deleteproperty/{id}', [AddpropertyController::class, 'destroy']);


Route::get('/searchproperty', [HomeController::class, 'searchProperty']);

Route::resource('properties', PropertyController::class);

Route::get('/addpropertytype', [PropertyController::class, 'addPropertyType']);
Route::post('/storepropertytype', [PropertyController::class, 'storePropertyType']);
Route::delete('/deletepropertytype/{id}', [PropertyController::class, 'deletePropertyType']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
