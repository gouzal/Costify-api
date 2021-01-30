<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\ShippingCompanyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'v1',
], function () {
    //Route::post('login', 'api\v1\UserController@login')->name('login');
    Route::get('shipping-companies', [ShippingCompanyController::class,'index']);

    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        // shipping
        //Route::post('users', 'api\v1\UserController@index');


    });
});
