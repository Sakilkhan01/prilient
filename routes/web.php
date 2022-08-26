<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\CareerController;
use App\Http\Controllers\admin\JobsContoller;
 


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

Route::get('/', [HomeController::class, 'home']);
Route::get('/career', [HomeController::class, 'Career']);
Auth::routes(['register' => false,'home' => false]);

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [BlogController::class, 'view'])->name('view_blog');
Route::post('blog-post', [BlogController::class, 'store'])->name('store-blog');

Route::get('search', [BlogController::class, 'search']);

// static routes

Route::view('/about-us', 'front.pages.about_us');
Route::view('/service', 'front.pages.services');
Route::view('/DevOps', 'front.pages.DevOps');
Route::view('/web_design', 'front.pages.web_design');
Route::view('/cyber_security', 'front.pages.cyber_security');
Route::view('/software_development', 'front.pages.software_development');
Route::view('/product_design', 'front.pages.product_design');
Route::view('/product_strategy', 'front.pages.product_strategy');
Route::view('/app_development', 'front.pages.app_development');
Route::view('/web_development', 'front.pages.web_development');
Route::view('/frontend_development', 'front.pages.frontend_development');
Route::view('/fullStack_development', 'front.pages.fullStack_development');
Route::view('/cloud_strategy', 'front.pages.cloud_strategy');
Route::view('/Analytics_and_BI', 'front.pages.AnalyticsBI');
Route::view('/NextGen', 'front.pages.NextGen');
Route::view('/Quality_Engineering', 'front.pages.Quality_Engineering');
Route::view('/backend_development', 'front.pages.backend_development');
Route::view('/blockchain_development', 'front.pages.blockchain_development');
Route::view('/privacy_policy', 'front.pages.privacy_policy');






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

    // Route::get('header-footer', [App\Http\Controllers\admin\HeaderFooterController::class, 'create'])->name('header-footer');
    // Route::post('update-header-footer', [App\Http\Controllers\admin\HeaderFooterController::class, 'store'])->name('update-header-footer');
    // Route::get('site-seo', [App\Http\Controllers\admin\SiteSeoController::class, 'index'])->name('site-seo');
    // Route::post('update-site-seo', [App\Http\Controllers\admin\SiteSeoController::class, 'store'])->name('site-seo');
});