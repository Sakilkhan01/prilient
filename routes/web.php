<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\CareerController;
use App\Http\Controllers\admin\JobsContoller;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapXmlController;



 


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
Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);



Route::middleware(['HtmlMinifier'])->group(static function(){

    Route::get('/', [HomeController::class, 'home']);
    Route::get('service/{slug}', [HomeController::class, 'getService']);
    Route::get('services/{slug}', [HomeController::class, 'getServiceCategory']);
    Route::view('/about-us', 'front.pages.about_us');
    Route::get('/career', [HomeController::class, 'Career']);
    Route::get('blog', [BlogController::class, 'index'])->name('blog');
    Route::get('blog/{slug}', [BlogController::class, 'view'])->name('view_blog');
    Route::post('blog-post', [BlogController::class, 'store'])->name('store-blog');
    Route::get('search', [BlogController::class, 'search']);

    Route::get('contact-us', [ContactController::class, 'index']);
    Route::post('contact-us/store', [ContactController::class, 'store'])->name('contact_store');
    
    Route::post('send-request-a-quote', [ContactController::class, 'sendRequestAQuete'])->name('send-request-a-quote');

    Route::view('product-design/web-design', 'front.pages.productDesign.web_design');



    Route::view('/service', 'front.pages.services');
    Route::view('/web_design', 'front.pages.web_design');
    Route::view('/software_development', 'front.pages.software_development');
    Route::view('/privacy_policy', 'front.pages.privacy_policy');

    Route::view('technologies', 'front.pages.technologies');
});



Auth::routes(['register' => false,'home' => false]);
// Auth::routes(['home' => false]);









Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth'], 'nampspace'=>'admin'], function(){
     
    Route::get('dashboard', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin.dashboard');
   
    Route::get('blog', [App\Http\Controllers\admin\BlogController::class, 'index'])->name('list_blog');
    Route::get('add-blog', [App\Http\Controllers\admin\BlogController::class, 'create'])->name('add_blog');
    Route::post('blog', [App\Http\Controllers\admin\BlogController::class, 'store'])->name('save_blog');
    Route::get('edit-blog/{slug}', [App\Http\Controllers\admin\BlogController::class, 'edit'])->name('edit_blog');
    Route::post('update-blog', [App\Http\Controllers\admin\BlogController::class, 'update'])->name('update_blog');
    Route::get('delete-blog/{id}', [App\Http\Controllers\admin\BlogController::class, 'delete'])->name('delete_blog'); 
    Route::post('update-blog', [App\Http\Controllers\admin\BlogController::class, 'update'])->name('update_blog');
     
    Route::resource('career', CareerController::class);
    Route::post('career/Carrerupdate/{id}', [CareerController::class, 'Carrerupdate'])->name('carrer.update');
    Route::get('career/CarrerDelete/{id}', [CareerController::class, 'CarrerDelete'])->name('carrer.delete');

    Route::get('job-post', [JobsContoller::class, 'index'])->name('job_post');
    Route::get('job-post/add', [JobsContoller::class, 'create'])->name('job_post_add');
    Route::post('job-post/store', [JobsContoller::class, 'store'])->name('job_post_store');
    Route::get('job-post/edit/{id}', [JobsContoller::class, 'edit'])->name('job_post_edit');
    Route::post('job-post/update/{id}', [JobsContoller::class, 'update'])->name('job_post_update');
    Route::get('job-post/delete/{id}', [JobsContoller::class, 'delete'])->name('job_post_delete');

    Route::get('contact-us/list', [ContactController::class, 'list'])->name('contact_us.list');
    Route::get('contact-us/show/{id}', [ContactController::class, 'show'])->name('contact_us.show');
    Route::get('contact-us/pdf/{id}', [ContactController::class, 'showPDF'])->name('pdfStream');



    // Route::get('header-footer', [App\Http\Controllers\admin\HeaderFooterController::class, 'create'])->name('header-footer');
    // Route::post('update-header-footer', [App\Http\Controllers\admin\HeaderFooterController::class, 'store'])->name('update-header-footer');
    // Route::get('site-seo', [App\Http\Controllers\admin\SiteSeoController::class, 'index'])->name('site-seo');
    // Route::post('update-site-seo', [App\Http\Controllers\admin\SiteSeoController::class, 'store'])->name('site-seo');

    Route::get('users/list', [UserController::class, 'index'])->name('users.index');
    Route::get('user/create', [UserController::class, 'create'])->name('users.create');
    Route::post('user/store', [UserController::class, 'store'])->name('users.store');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('user/update/{user}', [UserController::class, 'update'])->name('users.update');
    Route::get('user/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');






});


