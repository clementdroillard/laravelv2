<?php

use Illuminate\Http\Request;


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
/*
Route::get('/todos', function (Request $request) {
	return json_encode(DB::select('select `id`, `label`, `isDone`, `created_at`, `updated_at` from todos'));
});

Route::delete('/todos/{id}', function (Request $request) {
	return json_encode(DB::delete('DELETE FROM todos WHERE id = ? ',[$request->id]));
});
*/

Route::get('/todos', 'TodosController@index');
Route::post('/todos', 'TodosController@store');
Route::put('/todos/{id}', 'TodosController@update');
Route::delete('/todos/{id}', 'TodosController@destroy');