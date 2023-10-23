<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ImportedBlogController;

use App\Models\Blog;

use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;


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


Route::post('/commercial-kitchen-media/{slug}', [BlogController::class, 'blogDetail'])->name('blog.details');
Route::post('/save-subscriber', [SubscribersController::class, 'saveSubscriber'])->name('save-subscriber');
Route::post('/submit-contact-form', [ContactFormController::class, 'submitForm'])->name('submit-contact-form');


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
    Route::post('/store-blog', [BlogController::class, 'storeBlog'])->name('store.blog');
    Route::post('/update-blog/{slug}', [BlogController::class, 'updateBlog'])->name('update.blog');
    Route::post('/publish/{slug}', [BlogController::class, 'publishBlog'])->name('publish.blog');
    Route::post('/feature/{slug}', [BlogController::class, 'featureBlog'])->name('feature.blog');
    Route::delete('/delete-blog/{slug}', [BlogController::class, 'deleteBlog'])->name('delete.blog');
    Route::delete('/delete-imported-blog/{slug}', [BlogController::class, 'deleteImportedBlog'])->name('delete.imported.blog');
    Route::post('/store/imported/blogs', [ImportedBlogController::class, 'store'])->name('imported.blogs');

    Route::post('/import-leads', [LeadController::class, 'importLeads'])->name('import.leads');
    Route::post('/save-lead-convo/{id}', [LeadController::class, 'saveConvo'])->name('save.convo');
});


Route::get('/clear_data', function () {
    Artisan::call('optimize:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    return 'Cache Cleared';
});

Route::get('/generate_sitemap', function () {

    $sitemap = SitemapGenerator::create(config('app.url'))
        ->getSitemap()
        ->add(Url::create('/commercial-kitchen-services')
            ->setLastModificationDate(Carbon::today())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1))
        ->add(Url::create('/commercial-kitchen-about')
            ->setLastModificationDate(Carbon::today())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1))
        ->add(Url::create('/commercial-kitchen-contact')
            ->setLastModificationDate(Carbon::today())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1))
        ->add(Url::create('/commercial-kitchen-media')
            ->setLastModificationDate(Carbon::today())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1));

    Blog::all()->each(function (Blog $blog) use ($sitemap) {
        $title = $blog->title;
        $title = preg_replace('/[^a-z0-9- ]/', '', strtolower($title));
        $title = str_replace(' ', '-', $title);
        $title = preg_replace('/-+/', '-', $title);
        $title = trim($title, '-');
        $sitemap->add(Url::create("/commercial-kitchen-media/{$title}")
            ->setLastModificationDate(Carbon::today())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1));
    });

    $sitemap->writeToFile(public_path('sitemap.xml'));
    return 'Sitemap generated succesfully';
});