<?php
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ImportedBlogController;


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
})->name('landing');
Route::get('/commercial-kitchen-services', function () {
    return Inertia::render('Client/Service');
})->name('services');
Route::get('/commercial-kitchen-about', function () {
    return Inertia::render('Client/About');
})->name('about');
Route::get('/commercial-kitchen-contact', function () {
    return Inertia::render('Client/Contact');
})->name('contacts');
Route::get('/commercial-kitchen-media', function () {
    return Inertia::render('Client/Media');
})->name('media');
Route::get('/commercial-kitchen-blog-detail', function () {
    return Inertia::render('Client/Detail');
})->name('blog.detail');



Route::post('/save-subscriber', [ SubscribersController::class, 'saveSubscriber' ] )->name('save-subscriber');
Route::post('/submit-contact-form', [ ContactFormController::class, 'submitForm' ])->name('submit-contact-form');






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('admin.dashboard');

    Route::get('/admin-blogs', function () {
        return Inertia::render('Admin/Blogs');
    })->name('admin.blogs');

    Route::get('/admin-leads', function () {
        return Inertia::render('Admin/Leads');
    })->name('admin.leads');

    Route::get('/admin-products', function () {
        return Inertia::render('Admin/Products');
    })->name('admin.products');

    Route::post('/add-category', [BlogController::class, 'addCategory'])->name('add.category');
    Route::post('/upload-image', [BlogController::class, 'uploadImage']);
    Route::post('/store-blog', [BlogController::class, 'storeBlog']);
    Route::post('/update-blog/{slug}', [BlogController::class, 'updateBlog'])->name('update.blog');
    Route::post('/commercial-kitchen-blog/{slug}', [BlogController::class, 'blogDetail'])->name('blog.details');
    Route::post('/publish/{slug}', [BlogController::class, 'publishBlog'])->name('publish.blog');
    Route::post('/feature/{slug}', [BlogController::class, 'featureBlog'])->name('feature.blog');
    Route::delete('/delete-blog/{slug}', [BlogController::class, 'deleteBlog'])->name('delete.blog');
    Route::post('/store-imported-blogs', [ImportedBlogController::class, 'store'])->name('add.imported.blogs');

    Route::post('/import-leads', [LeadController::class, 'importLeads'])->name('import.leads');
    Route::post('/save-lead-convo/{id}', [LeadController::class, 'saveConvo'])->name('save.convo');


});

Route::get('/clear_data', function () {
    Artisan::call('optimize:clear');
    Artisan::call('config:clear');
    return 'Cache Cleared';
});
