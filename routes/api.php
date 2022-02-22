<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('register', 'App\Http\Controllers\UserController@register');
// Route::post('login', 'App\Http\Controllers\UserController@authenticate');

// Route::group(['middleware' => ['jwt.verify']], function() {
//     Route::post('user','App\Http\Controllers\UserController@getAuthenticatedUser');
// });

//Routes Api Rest
Route::get('formdetail/{formschema}', App\Http\Controllers\FormgeneralController::class);

Route::apiResource('formschema.formsection', App\Http\Controllers\FormsectionController::class);

Route::apiResource('formschema', App\Http\Controllers\FormschemaController::class);

Route::apiResource('formsection', App\Http\Controllers\FormsectionController::class);

Route::apiResource('formgroup', App\Http\Controllers\FormgroupController::class);

Route::apiResource('formfield', App\Http\Controllers\FormfieldController::class);

Route::apiResource('formfieldtype', App\Http\Controllers\FormfieldtypeController::class);

Route::apiResource('formfieldoption', App\Http\Controllers\FormfieldoptionController::class);

Route::apiResource('formfieldoptionitem', App\Http\Controllers\FormfieldoptionitemController::class);

Route::apiResource('formfieldevent', App\Http\Controllers\FormfieldeventController::class);

Route::apiResource('formvalue', App\Http\Controllers\FormvalueController::class);

Route::apiResource('formfieldvalue', App\Http\Controllers\FormfieldvalueController::class);
