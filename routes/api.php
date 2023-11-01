<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-categories', [ApiController::class, 'getCategories'] );
Route::get('/get-blogs', [ApiController::class, 'getBlog']);
Route::get('/get-published-blogs', [ApiController::class, 'getPublishedBlog']);
Route::get('/get-leads', [ApiController::class, 'getLeads']);
Route::get('/get-imported-blogs', [ApiController::class, 'getImportedBlogs'])->name('get.imported.blogs');
Route::post('/update-lead-probability/{id}', [ApiController::class, 'updateProbability'])->name('update.probability');
Route::post('/update-lead-location/{id}', [ApiController::class, 'updateLocation'])->name('update.location');
Route::post('/update-lead-when/{id}', [ApiController::class, 'updateWhen'])->name('update.when');

