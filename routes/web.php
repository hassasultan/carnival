<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\SubVendorController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\VariantController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CostumeController;
use App\Http\Controllers\Vendor\BlogController;
use App\Http\Controllers\SubVendor\SubVendorBlogController;
use App\Http\Controllers\Vendor\VendorCostumeController;
use App\Http\Controllers\SubVendor\SubVendorCostumeController;
use App\Http\Controllers\Vendor\VendorProductController;
use App\Http\Controllers\SubVendor\SubVendorProductController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\FrontendConroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CarnivalController;
use App\Http\Controllers\CarnivalCommitteeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\SiteGalleryController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EventsCountryTabController;
use App\Http\Controllers\TestimonialsController;

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

Route::get('/', [FrontendConroller::class, 'home'])->name('front.home');
Route::get('/product-listing', [FrontendConroller::class, 'product_listing'])->name('front.product_listing');
Route::get('/mascamps', [FrontendConroller::class, 'vendor_listing'])->name('front.vendors');
Route::get('/get-section-leaders', [FrontendConroller::class, 'sub_vendor_listing'])->name('get.subvendors.front');
Route::get('/shop/{slug}', [FrontendConroller::class, 'vendor_detail'])->name('front.vendor.detail');
Route::get('/get/shop/products/{slug}', [FrontendConroller::class, 'get_vendor_products'])->name('front.vendor.products');
Route::get('/get-products', [FrontendConroller::class, 'get_product'])->name('get.products.home');
Route::get('/shop/product/{slug}', [FrontendConroller::class, 'product_detail'])->name('get.products.detail');
Route::get('/get-vendors', [FrontendConroller::class, 'get_vendors'])->name('get.vendors.front');
Route::get('/get-subvendors', [FrontendConroller::class, 'get_subVendors'])->name('get.subVvendors.front');
Route::get('/shop/section-leader/{slug}', [FrontendConroller::class, 'sub_vendor_detail'])->name('front.subVendor.detail');

Route::get('/unauthorized', function () {
    return view('unauthorized');
})->name('unauthorized');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// get subcategories
Route::get('/get-subcategories/{categoryId}', [ProductController::class, 'getsubCategories'])->name('get.subcategories');

// customer
Route::get('/user-login', [CustomerController::class, 'login'])->name('customer.login');
Route::get('/user-register', [CustomerController::class, 'register'])->name('customer.register');
Route::post('/user-store', [CustomerController::class, 'storeCustomer'])->name('customer.users.register');

// carnival commitee user
Route::get('/register/new/user/{id}', [CarnivalCommitteeController::class, 'create'])->name('register.new.user');


// Admin Routes
Route::middleware('admin')->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin');

    // Roles Crud
    Route::resource('roles', RoleController::class);

    // Permissions Crud
    Route::resource('permissions', PermissionsController::class);

    // RolesPermissions Crud
    Route::resource('role_permissions', RolePermissionController::class);
    Route::post('/get_permissions', [RolePermissionController::class, 'getPermissions'])->name('get_permissions_by_role');

    // Packages Crud
    Route::resource('packages', PackageController::class);

    // Categories Crud
    Route::resource('categories', CategoryController::class);

    // Products Crud
    Route::resource('products', ProductController::class);

    // Costumes Crud
    Route::resource('costumes', CostumeController::class);

    // Events Crud
    Route::resource('events', EventController::class);

    // Subcategories Crud
    Route::resource('subcategories', SubcategoryController::class);

    // Tickets Crud
    Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
    Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
    Route::get('/tickets/{ticket}/edit', [TicketController::class, 'edit'])->name('tickets.edit');
    Route::put('/tickets/{ticket}', [TicketController::class, 'update'])->name('tickets.update');
    Route::delete('/tickets/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy');

    // Variants Crud
    Route::get('/variants', [VariantController::class, 'index'])->name('variants.index');
    Route::post('/variants', [VariantController::class, 'store'])->name('variants.store');
    Route::get('/variants/{variant}/edit', [VariantController::class, 'edit'])->name('variants.edit');
    Route::put('/variants/{variant}', [VariantController::class, 'update'])->name('variants.update');
    Route::delete('/variants/{variant}', [VariantController::class, 'destroy'])->name('variants.destroy');

    // get categories
    Route::get('/get-categories/{packageId}', [EventController::class, 'getCategories'])->name('get.categories');

    // user management
    Route::get('/users', [UserManagementController::class, 'indexUser'])->name('users.index');
    Route::get('/users/new', [UserManagementController::class, 'createUser'])->name('users.add');
    Route::post('/users/register', [UserManagementController::class, 'register'])->name('users.register');
    Route::get('/users/edit/{id}', [UserManagementController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserManagementController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserManagementController::class, 'destroyUser'])->name('users.destroy');

    Route::get('/vendor-categories', [UserManagementController::class, 'getCategories'])->name('users.get.categories');

    //blogs
    Route::resource('blogs', BlogsController::class)->except(['update']);
    Route::put('/blogs/{blog}', [BlogsController::class, 'update'])->name('blogs.update');

    //musics
    Route::resource('musics', MusicController::class);

    //services
    Route::resource('services', ServiceController::class);

    //orders
    Route::resource('orders', OrderController::class);

    //carnivals
    Route::resource('carnivals', CarnivalController::class);


    //appointments
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/appointments/add', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::post('/appointments/check-conflict', [AppointmentController::class, 'checkConflict'])->name('appointments.check-conflict');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::get('/appointments/{variant}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
    Route::put('/appointments/{variant}', [AppointmentController::class, 'update'])->name('appointments.update');
    Route::delete('/appointments/{variant}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

    // get head_team
    Route::get('/get/head_team/{id}', [CarnivalController::class, 'head_team'])->name('get.head.team');

    // get head_team
    Route::post('/update/head_team', [CarnivalController::class, 'carnivalHead'])->name('update.carnival.head');


    // Regions CRUD
    Route::resource('regions', RegionController::class);

    //Our Service CRUD
    Route::resource('our_services', OurServiceController::class);

    //Gallery CRUD
    Route::resource('site_gallery', SiteGalleryController::class);

    //Investor CRUD
    Route::resource('investors', InvestorController::class);

    //Brands CRUD
    Route::resource('brands', BrandController::class);

    //Countries CRUD

    Route::resource('countries', CountryController::class);

    //Cities CRUD
    Route::resource('cities', CityController::class);

    // Events tabs
    Route::resource('events_country_tabs', EventsCountryTabController::class);
    
    // testimonials
    Route::resource('testimonials', TestimonialsController::class);

    // API Route for getting cities by country
    Route::get('api/cities/{country_id}', [EventsCountryTabController::class, 'getCitiesByCountry'])->name('get.cities.by.country');
});

Route::get('/get_single_user/{id}', [UserManagementController::class, 'getSingleUser'])->name('get.single.user');


// Vendor Routes
Route::middleware('vendor')->prefix('vendor')->group(function () {

    Route::get('/', [VendorController::class, 'index'])->name('vendor');

    // products
    Route::get('/products', [VendorProductController::class, 'index'])->name('vendor.products');
    Route::get('/products/add', [VendorProductController::class, 'create'])->name('vendor.products.create');
    Route::get('/products/edit/{id}', [VendorProductController::class, 'edit'])->name('vendor.products.edit');
    Route::post('/products/store', [VendorProductController::class, 'store'])->name('vendor.products.store');
    Route::put('/products/update/{id}', [VendorProductController::class, 'update'])->name('vendor.products.update');

    // events
    Route::get('/events', [VendorController::class, 'indexEvent'])->name('vendor.events');
    Route::get('/events/edit/{event}', [VendorController::class, 'editEvent'])->name('vendor.events.edit');
    Route::post('/events/store', [VendorController::class, 'storeEvent'])->name('vendor.events.store');
    Route::put('/events/update/{event}', [VendorController::class, 'updateEvent'])->name('vendor.events.update');

    // get subcategories
    Route::get('/get-subcategory/{categoryId}', [ProductController::class, 'getsubCategories'])->name('vendor.get.subcategories');

    //blogs
    Route::get('/blogs', [BlogController::class, 'index'])->name('vendor.blogs.index');
    Route::get('/blogs/add', [BlogController::class, 'create'])->name('vendor.blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('vendor.blogs.store');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('vendor.blogs.edit');
    Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('vendor.blogs.update');
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('vendor.blogs.destroy');

    // costumes
    Route::get('/costumes', [VendorCostumeController::class, 'index'])->name('vendor.costumes.index');
    Route::get('/costumes/edit/{id}', [VendorCostumeController::class, 'edit'])->name('vendor.costumes.edit');
    Route::post('/costumes/store', [VendorCostumeController::class, 'store'])->name('vendor.costumes.store');
    Route::put('/costumes/update/{id}', [VendorCostumeController::class, 'update'])->name('vendor.costumes.update');
    Route::delete('/costumes/{costume}', [VendorCostumeController::class, 'destroy'])->name('vendor.costumes.destroy');
});


// SubVendor Routes
Route::middleware('subVendor')->prefix('subVendor')->group(function () {

    Route::get('/', [SubVendorController::class, 'index'])->name('subVendor');

    // products
    Route::get('/my_products', [SubVendorProductController::class, 'index'])->name('subVendor.products');
    Route::get('/my_products/edit/{id}', [SubVendorProductController::class, 'edit'])->name('subVendor.products.edit');
    Route::post('/my_products/store', [SubVendorProductController::class, 'store'])->name('subVendor.products.store');
    Route::put('/my_products/update/{id}', [SubVendorProductController::class, 'update'])->name('subVendor.products.update');

    // events
    Route::get('/my_events', [SubVendorController::class, 'indexEvents'])->name('subVendor.events');
    Route::get('/my_events/edit/{event}', [SubVendorController::class, 'editEvents'])->name('subVendor.events.edit');
    Route::post('/my_events/store', [SubVendorController::class, 'storeEvents'])->name('subVendor.events.store');
    Route::put('/my_events/update/{event}', [SubVendorController::class, 'updateEvents'])->name('subVendor.events.update');

    //blogs
    Route::get('/blogs', [SubVendorBlogController::class, 'index'])->name('subVendor.blogs.index');
    Route::get('/blogs/add', [SubVendorBlogController::class, 'create'])->name('subVendor.blogs.create');
    Route::post('/blogs', [SubVendorBlogController::class, 'store'])->name('subVendor.blogs.store');
    Route::get('/blogs/{blog}/edit', [SubVendorBlogController::class, 'edit'])->name('subVendor.blogs.edit');
    Route::put('/blogs/{blog}', [SubVendorBlogController::class, 'update'])->name('subVendor.blogs.update');
    Route::delete('/blogs/{blog}', [SubVendorBlogController::class, 'destroy'])->name('subVendor.blogs.destroy');

    // costumes
    Route::get('/costumes', [SubVendorCostumeController::class, 'index'])->name('subVendor.costumes.index');
    Route::get('/costumes/edit/{id}', [SubVendorCostumeController::class, 'edit'])->name('subVendor.costumes.edit');
    Route::post('/costumes/store', [SubVendorCostumeController::class, 'store'])->name('subVendor.costumes.store');
    Route::put('/costumes/update/{id}', [SubVendorCostumeController::class, 'update'])->name('subVendor.costumes.update');
    Route::delete('/costumes/{costume}', [SubVendorCostumeController::class, 'destroy'])->name('subVendor.costumes.destroy');

});


// Customer Routes
Route::middleware('auth')->prefix('user')->group(function () {

    // Route::get('/', [CustomerController::class, 'index'])->name('users');

    Route::get('/', [CustomerController::class, 'profile'])->name('users.profile');
    // Route::get('/profile', [CustomerController::class, 'profile'])->name('users.profile');

    Route::post('/profile/update', [CustomerController::class, 'profileUpdate'])->name('users.profile.update');

});


//Frontend Routes

// Route::get('/mascamps', function(){
//     return view('ShopFrontend.vendors');
// })->name('mascamps');
// Route::get('/mascamp-detail', function(){
//     return view('ShopFrontend.MasbandDetail');
// })->name('MasbandDetail');
// Route::get('/product-detail', function(){
//     return view('ShopFrontend.product_detail');
// })->name('product_detail');
// Route::get('/wishlist', function(){
//     return view('ShopFrontend.wishlist');
// })->name('wishlist');
// Route::get('/checkout', function(){
//     return view('ShopFrontend.checkout');
// })->name('checkout');

// Add to cart
Route::get('/add_to_cart', [AddToCartController::class, 'addCart'])->name('add.to.cart');
Route::get('/check-out', [AddToCartController::class, 'checkout'])->name('check.out');
Route::get('/remove/to/cart/{id}', [AddToCartController::class, 'delete_cart_item'])->name('remove.to.cart');
