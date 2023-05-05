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
use App\Http\Controllers\DedicatedController;



 


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
Route::get('sitemap.xml', [SitemapXmlController::class, 'index']);

Auth::routes(['register' => false,'home' => false]);

Route::group(['middleware' => ['HtmlMinifier','CheckUrl']], static function(){

Route::get('/', [HomeController::class, 'home']);

Route::get('career', [HomeController::class, 'Career']);

Route::post('/subscribe', [HomeController::class, 'Subscribe']);

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [BlogController::class, 'view'])->name('view_blog');
Route::post('blog-post', [BlogController::class, 'store'])->name('store-blog');
Route::get('search', [BlogController::class, 'search']);

Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us/store', [ContactController::class, 'store'])->name('contact_store');

Route::get('dedicated-developer', [DedicatedController::class, 'index']);
Route::post('dedicated-developer/store', [DedicatedController::class, 'store'])->name('dedicated.store');

Route::post('send-request-a-quote', [ContactController::class, 'sendRequestAQuete'])->name('send-request-a-quote');

// static routes

Route::view('product-design', 'front.pages.productDesign.product_design');
Route::get('service/product_design', function () {
    return redirect('product-design');
});

Route::view('product-design/ui-ux-design', 'front.pages.productDesign.ui_ux_design');
Route::view('product-design/app-design', 'front.pages.productDesign.app_design');
Route::view('product-design/web-design', 'front.pages.productDesign.web_design');
Route::get('services/product_design-web_design', function () {
    return redirect('/product-design/web-design');
});

Route::view('about-us', 'front.pages.about_us');

Route::view('app_development', 'front.pages.AppDevelopment.app_development');
Route::get('mobil_app_development', function () {
    return redirect('/app_development');
});



Route::get('service/mobile_app_development', function () {
    return redirect('/app_development');
});

Route::view('app_development/ios-development', 'front.pages.AppDevelopment.ios');
Route::view('app_development/android-development', 'front.pages.AppDevelopment.android');
Route::view('app_development/flutter-development', 'front.pages.AppDevelopment.flutter');
Route::view('app_development/react-native-development', 'front.pages.AppDevelopment.react_native');

Route::view('web_development', 'front.pages.webDevelopment.web_development');
Route::view('web_development/ecommerce-development', 'front.pages.webDevelopment.ecommerce_development');
Route::view('web_development/CMS-development', 'front.pages.webDevelopment.CMS_development');
Route::view('web_development/CRM-development', 'front.pages.webDevelopment.CRM_development');
Route::view('web_development/ERP-development', 'front.pages.webDevelopment.ERP_development');
Route::view('web_development/enterprise-development', 'front.pages.webDevelopment.enterprise_development');

Route::view('cyber_security', 'front.pages.cyber_security');

Route::view('DevOps', 'front.pages.DevOps');

Route::view('product_prototype', 'front.pages.productPrototype.product_strategy');
Route::get('service/product_strategy_and_prototype', function () {
    return redirect('/product_prototype');
});
Route::view('product_prototype/mvp', 'front.pages.productPrototype.product_mvp');
Route::view('product_prototype/poc', 'front.pages.productPrototype.product_poc');

Route::view('Analytics_and_BI', 'front.pages.Analytics.AnalyticsBI');
Route::view('Analytics_and_BI/modern-data-warehouses', 'front.pages.Analytics.modern_warehouses');
Route::view('Analytics_and_BI/big-data', 'front.pages.Analytics.big_data');
Route::view('Analytics_and_BI/business-intelligence', 'front.pages.Analytics.business_intelligence');
Route::view('Analytics_and_BI/data-visualization', 'front.pages.Analytics.data_visualization');
Route::view('Analytics_and_BI/data-science', 'front.pages.Analytics.data_science');

Route::view('NextGen', 'front.pages.NextGen.NextGen');
Route::view('NextGen/AWS-ampify-&-AWS-lamda', 'front.pages.NextGen.AWS');
Route::get('services/next_gen_technology-aws', function () {
    return redirect('/NextGen/AWS-ampify-&-AWS-lamda');
});
Route::view('NextGen/firebase', 'front.pages.NextGen.firebase');
Route::view('NextGen/chatbot-dvelopment', 'front.pages.NextGen.chatbot');
Route::view('NextGen/AI-&-ML-development', 'front.pages.NextGen.AI&ML');
Route::view('NextGen/RPA-development', 'front.pages.NextGen.RPA');

Route::view('frontend_development', 'front.pages.frontendDevelopment.frontend_development');
Route::view('frontend_development/angular-development', 'front.pages.frontendDevelopment.angular_development');
Route::view('frontend_development/react-development', 'front.pages.frontendDevelopment.react_development');
Route::view('frontend_development/vue-development', 'front.pages.frontendDevelopment.vue_development');
Route::get('services/front_end_development-vue_JS_development', function () {
    return redirect('/frontend_development/vue-development');
});

Route::view('frontend_development/html-development', 'front.pages.frontendDevelopment.html_development');

Route::view('Quality_Engineering', 'front.pages.QualityEngineering.Quality_Engineering');
Route::view('Quality_Engineering/mobile-testing', 'front.pages.QualityEngineering.mobile_testing');
Route::view('Quality_Engineering/ERP-testing', 'front.pages.QualityEngineering.ERP_testing');
Route::view('Quality_Engineering/game-testing', 'front.pages.QualityEngineering.game_testing');
Route::view('Quality_Engineering/big-data-testing', 'front.pages.QualityEngineering.big_data_testing');
Route::view('Quality_Engineering/blockchain-testing', 'front.pages.QualityEngineering.blockchain_testing');
Route::get('public/services/quality_engineering-blockchain_testing', function () {
    return redirect('/Quality_Engineering/blockchain-testing');
});

Route::get('public/index.php/mobil_app_development', function () {
    return redirect('/app_development');
});

Route::view('Quality_Engineering/security-testing', 'front.pages.QualityEngineering.security_testing');
Route::view('Quality_Engineering/regression-testing', 'front.pages.QualityEngineering.regression_testing');
Route::view('Quality_Engineering/localization-testing', 'front.pages.QualityEngineering.localization_testing');
Route::view('Quality_Engineering/functional-testing', 'front.pages.QualityEngineering.functional_testing');
Route::view('Quality_Engineering/usability-testing', 'front.pages.QualityEngineering.usability_testing');

Route::view('backend_development', 'front.pages.backend.backend_development');
Route::view('backend_development/php-development', 'front.pages.backend.php');
Route::get('services/back_end_development-PHP_development', function () {
    return redirect('/backend_development/php-development');
});
Route::view('backend_development/node-development', 'front.pages.backend.node');
Route::view('backend_development/pyton-development', 'front.pages.backend.pyton');
Route::view('backend_development/laravel-development', 'front.pages.backend.laravel');
Route::view('backend_development/symfony-development', 'front.pages.backend.symfony');
Route::get('services/back_end_development-symfony_development', function () {
    return redirect('/backend_development/symfony-development');
});
Route::view('backend_development/java-development', 'front.pages.backend.java');
Route::get('public/services/java_development', function () {
    return redirect('/backend_development/java-development');
});
Route::view('backend_development/dotnet-development', 'front.pages.backend.dotnet');

Route::view('blockchain_development', 'front.pages.Blockchain.blockchain_development');
Route::view('blockchain_development/smart-contracts-development', 'front.pages.Blockchain.smartContracts');
Route::view('blockchain_development/blockchain-wallet-development', 'front.pages.Blockchain.Wallet');
Route::view('blockchain_development/decentralized-development', 'front.pages.Blockchain.Decentralized');
Route::view('blockchain_development/Private/Public-development', 'front.pages.Blockchain.Private');
Route::get('blockchain_development/private-development', function () {
    return redirect('/blockchain_development/Private/Public-development');
});

Route::view('blockchain_development/tokenization-development', 'front.pages.Blockchain.tokenization');
Route::get('services/blockchain_development-tokenization_development', function () {
    return redirect('/blockchain_development/tokenization-development');
});
Route::view('blockchain_development/NFT-development', 'front.pages.Blockchain.NFT');

Route::view('fullStack_development', 'front.pages.fullStack.fullStack_development');
Route::get('public/service/full_stack_development', function () {
    return redirect('/fullStack_development');
});
Route::view('fullStack_development/MEAN-stack-development', 'front.pages.fullStack.meanStack');
Route::view('fullStack_development/MERN-stack-development', 'front.pages.fullStack.mernStack');

Route::view('service', 'front.pages.services');
Route::view('web_design', 'front.pages.web_design');

Route::view('software_development', 'front.pages.software_development');
Route::view('privacy_policy', 'front.pages.privacy_policy');
Route::get('privacy-policy', function () {
    return redirect('/privacy_policy');
});

Route::view('croponkart-privacy', 'front.pages.croponkart_privacy');

Route::view('technologies', 'front.pages.technologies');

Route::view('cloud_strategy', 'front.pages.cloud_strategy.cloud_strategy');
Route::view('cloud_strategy/SaaS_Development', 'front.pages.cloud_strategy.SaaS_development');
Route::view('cloud_strategy/IaaS_Development', 'front.pages.cloud_strategy.IaaS_development');
Route::view('cloud_strategy/PaaS_Development', 'front.pages.cloud_strategy.PaaS_development');
Route::view('cloud_strategy/Cloud_App_Development', 'front.pages.cloud_strategy.Cloud_App_Development');
Route::view('cloud_strategy/Cloud_Migration', 'front.pages.cloud_strategy.Cloud_Migration');
Route::view('cloud_strategy/Amazon_cloud', 'front.pages.cloud_strategy.Amazon_cloud');
Route::view('cloud_strategy/Cloud_Security', 'front.pages.cloud_strategy.Cloud_Security');
Route::view('cloud_strategy/Azure_Cloud_Service', 'front.pages.cloud_strategy.Azure_Cloud_Service');


Route::view('portfolio', 'front.pages.portfolio');

});

 


Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth'], 'nampspace'=>'admin'], function(){
     
    Route::get('dashboard', 'App\Http\Controllers\admin\HomeController@index')->name('admin.dashboard');
   
    Route::get('blog', 'App\Http\Controllers\admin\BlogController@index')->name('list_blog');
    Route::get('add-blog', 'App\Http\Controllers\admin\BlogController@create')->name('add_blog');
    Route::post('blog', 'App\Http\Controllers\admin\BlogController@store')->name('save_blog');
    Route::get('edit-blog/{slug}', 'App\Http\Controllers\admin\BlogController@edit')->name('edit_blog');
    Route::post('update-blog', 'App\Http\Controllers\admin\BlogController@update')->name('update_blog');
    Route::get('delete-blog/{id}', 'App\Http\Controllers\admin\BlogController@delete')->name('delete_blog'); 
    Route::post('update-blog', 'App\Http\Controllers\admin\BlogController@update')->name('update_blog');
     
    Route::resource('career', 'App\Http\Controllers\admin\CareerController');

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


