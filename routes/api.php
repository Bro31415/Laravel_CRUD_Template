<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/', [BookController::class, 'index']);
Route::get('/', 'BookController@index');
// Route::post('/create-book', [BookController::class, 'create']);
// Route::post('/update-buku/{id}', [BookController::class, 'updateBook']); //patch update book method
// Route::delete('/delete-api/{id}', [BookController::class, 'deleteBook']);

Route::get('/books', [BookController::class, 'apiGetBooks']);

Route::post('/books/create', [BookController::class, 'apiStore']);

Route::delete('/delete-book/{id}', [BookController::class, 'apiDeleteBook']);

Route::patch('/update-book/{id}', [BookController::class, 'apiUpdateBook']);