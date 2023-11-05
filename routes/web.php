<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutDetailsController;
use App\Http\Controllers\Admin\AboutFaqController;
use App\Http\Controllers\Admin\AccordionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Frontend\FrontpageController;
use App\Http\Controllers\Admin\AdminMenuActionController;
use App\Http\Controllers\Admin\ClientMessageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DeliveryDetailsController;
use App\Http\Controllers\Admin\DeliveryWeightSetupController;
use App\Http\Controllers\Admin\DetailsCardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MainAreaSetupController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\ProcessingDetailsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\ServicesTagController;
use App\Http\Controllers\Admin\SocialWorkController;
use App\Http\Controllers\Admin\SpecialFoodItemsController;
use App\Http\Controllers\Admin\SubAreaSetupController;
use App\Http\Controllers\Admin\TermsAndConditionController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\DeliveryItemController;
use App\Http\Controllers\Admin\BranchController;
use App\Models\DeliveryItem;

// unnecessary
use App\Http\Controllers\Admin\ShowcaseItemController;
use App\Http\Controllers\Admin\SiteInformationsController;
use App\Http\Controllers\Admin\SiteItemsController;
use App\Http\Controllers\Admin\StaticContentsController;
use App\Models\AboutDetails;
use App\Models\AboutFaq;
use App\Http\Controllers\Admin\ProductController; 
use App\Http\Controllers\Admin\UserMessageController; 
use App\Http\Controllers\Admin\ClientReviewsController; 
use App\Http\Controllers\Admin\DeliverChargeSetupController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('login.index');
    Route::post('/login', [AdminController::class, 'login'])->name('login');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['admin_permission']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    // Route::get('/dashboard', function(){
    //     return redirect()->route('admin.admin-menu.index');
    // })->name('dashboard');

    Route::post('/sidebar', [AdminController::class, 'sidebar'])->name('sidebar');
    Route::get('/profile', [AdminController::class, 'edit'])->name('profile.index');
    Route::put('/change-images', [AdminController::class, 'changeImages'])->name('change-images');
    Route::put('/change-password', [AdminController::class, 'changePassword'])->name('change-password');
    Route::put('/profile', [AdminController::class, 'update'])->name('profile.update');

    // User Management
    Route::resource('/user', UserController::class);
    Route::get('/user/{id}/password', [UserController::class, 'changePassword'])->name('user.password');
    Route::put('/user/password/{id}', [UserController::class, 'passwordUpdate'])->name('user.password-update');

    // Role Management
    Route::resource('/role', RoleController::class);

    // Permission Management
    Route::get('/permission/{id}', [RoleController::class, 'rolePermissionEdit'])->name('rolePermission.edit');
    Route::put('/permission/permissions-update/{id}', [RoleController::class, 'rolePermissionUpdate'])->name('rolePermission.update');

    // Admin Menu Management
    Route::resource('/admin-menu', AdminMenuController::class);

    // Admin Menu Actions Management
    Route::get('/admin-menu-actions/{id}', [AdminMenuActionController::class, 'index'])->name('admin-menuAction.index');
    Route::post('/admin-menu-actions/{id}/store', [AdminMenuActionController::class, 'store'])->name('admin-menuAction.store');
    Route::get('/admin-menu-actions/{id}/edit', [AdminMenuActionController::class, 'edit'])->name('admin-menuAction.edit');
    Route::put('/admin-menu-actions/{id}', [AdminMenuActionController::class, 'update'])->name('admin-menuAction.update');
    Route::delete('/admin-menu-actions/{id}', [AdminMenuActionController::class, 'destroy'])->name('admin-menuAction.destroy');
    Route::get('/admin-menu-actions-status/{id}', [AdminMenuActionController::class, 'status'])->name('admin-menuAction.status');
    Route::get('/admin-menu-actions/{id}/create', [AdminMenuActionController::class, 'create'])->name('admin-menuAction.create');
    
    // Admin Settings Management
    Route::resource('/admin-settings', AdminSettingController::class);

    // Settings Management
    Route::resource('/settings', SettingController::class);

    // Home Page Slider management
    Route::resource('/slider', SliderController::class); 

    // Site Items Management
    // Route::resource('/site-item', SiteItemsController::class);

    // Special Food Items Management
    Route::resource('/special-food-item', SpecialFoodItemsController::class);

    // Details Card Items Management
    Route::resource('/details-card', DetailsCardController::class);

    // Details Services Management
    Route::resource('/services', ServicesController::class);
    Route::resource('/services-tag', ServicesTagController::class);

    // Site Settings Management
    // Route::resource('/site-information', SiteInformationsController::class);

    // Site Contact Details Management
    Route::resource('/testimonial', TestimonialController::class);

    // Site About Us Details Management
    Route::resource('/about', AboutController::class);

    // Site About Us Details Management
    Route::resource('/social-working', SocialWorkController::class);

    // Site Contact Details Management
    Route::resource('/contact', ContactController::class);

    // User Message Management
    Route::resource('/client-message', ClientMessageController::class);

    // User Processing Details Management
    Route::resource('/processing-details', ProcessingDetailsController::class);

    // User Main Area Setup Management
    Route::resource('/main-area-setup', MainAreaSetupController::class);

    // User Sub Area Setup Management
    Route::resource('/sub-area-setup', SubAreaSetupController::class);

    // User Accordion Management 
    Route::resource('/accordion', AccordionController::class);

    // User About Management 
    Route::resource('/about-details', AboutDetailsController::class); 
    Route::resource('/about-faq', AboutFaqController::class);

    // Faqs Management
    Route::resource('faq', FaqController::class);

    // Faqs Management
    Route::resource('privacy', PrivacyController::class);

    // Trams And Conditions Management
    Route::resource('trams-and-conditions', TermsAndConditionController::class);

    // Delivery Weight Attributes 
    Route::resource('delivery-weight', DeliveryWeightSetupController::class);

    // Delivery Weight Attributes 
    Route::resource('delivery-item', DeliveryItemController::class);

    // Delivery Details
    Route::resource('delivery-details', DeliveryDetailsController::class);

    // Branch Setup
    Route::resource('branch', BranchController::class);
});


// This routing group only applicable for front-end public's pages!
Route::group(['as' => 'frontend.'], function () {

    Route::controller(FrontpageController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('faq', 'faq')->name('faq');
        Route::get('about', 'about')->name('about');
        Route::get('contact', 'contact')->name('contact');
        Route::get('services', 'services')->name('services');
        Route::get('privacy', 'privacy')->name('privacy');
        Route::get('terms-and-conditions', 'termsAndConditions')->name('terms_and_conditions');

        Route::get('merchant-register', 'merchantRegister')->name('merchant_register');
        Route::get('marketing-agent-register', 'marketingAgentRegister')->name('marketing_agent_register');
        // Route::get('rider-register', 'riderRegister')->name('rider_register');
        Route::get('delivery-man-register', 'deliveryManRegister')->name('delivery_man_register');
        Route::get('delivery-agent-register', 'deliveryAgentRegister')->name('delivery_agent_register');
    });

});

require __DIR__ . '/auth.php';

/** ----------- utility start ---------- */
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('clear-compiled');
    return redirect()->back()->withSuccessMessage('Cleared Successfully!');
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return redirect()->back()->withSuccessMessage('Linked Successfully!');
});

Route::get('/toggle-debug', function () {
    $path = base_path('.env');
    $test = file_get_contents($path);

    $prev_status = $_ENV['APP_DEBUG'];
    if ($prev_status == 'true' && file_exists($path)) {
        file_put_contents($path, str_replace('APP_DEBUG=true', 'APP_DEBUG=false', $test));
    }
    if ($prev_status == 'false' && file_exists($path)) {
        file_put_contents($path, str_replace('APP_DEBUG=false', 'APP_DEBUG=true', $test));
    }
    Artisan::call('config:clear');
    return redirect()->back()->withSuccessMessage('changed successfully!');
});

Route::get('/experiment', function () {
    return DeliveryItem::with('delivery_prices')->get();
});

/** ----------- utility end ---------- */
 
