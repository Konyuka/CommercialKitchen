<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Client/Landing');
});
Route::get('/commercial-kitchen-services', function () {
    return Inertia::render('Client/Service');
});
Route::get('/commercial-kitchen-about', function () {
    return Inertia::render('Client/About');
});
Route::get('/commercial-kitchen-contact', function () {
    return Inertia::render('Client/Contact');
});
Route::get('/commercial-kitchen-media', function () {
    return Inertia::render('Client/Media');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('dashboard');
    Route::get('/admin-blogs', function () {
        return Inertia::render('Admin/Blogs');
    })->name('admin.blogs');
});

Route::get('/clear_data', function () {
    Artisan::call('optimize:clear');
    return 'Cache Cleared';
});
