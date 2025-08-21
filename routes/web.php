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
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\VendorGalleryController;
use App\Http\Controllers\SubvendorGalleryController;
use App\Http\Controllers\ModelBookingController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FAQPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PaymentController;

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
Route::get('/aboutus', [FrontendConroller::class, 'aboutus'])->name('front.aboutus');
Route::get('/get-carnival-things', [FrontendConroller::class, 'getCarnivalThings'])->name('get.carnival.things');
Route::get('/travel', [FrontendConroller::class, 'travel'])->name('front.travel');
Route::get('/get-carnivals-by-region/{id}', [FrontendConroller::class, 'get_carnivals_by_region'])->name('front.getCarnivalsbyRegion');
Route::get('/get-carnivals-by-region-for-home/{id}', [FrontendConroller::class, 'get_carnivals_by_region_for_home'])->name('front.getCarnivalsbyRegionForHome');
Route::get('/carnival-listing', [FrontendConroller::class, 'carnival_listing'])->name('front.carnival.listing');

Route::get('/event-listing', [FrontendConroller::class, 'event_listing'])->name('front.event.listing');
Route::get('/tour-listing', [FrontendConroller::class, 'tour_listing'])->name('front.tour.listing');
Route::get('/flight-listing', [FrontendConroller::class, 'flight_listing'])->name('front.flight.listing');
Route::get('/hotel-listing', [FrontendConroller::class, 'hotel_listing'])->name('front.hotel.listing');
Route::get('/CG_Gear-listing', [FrontendConroller::class, 'cgGear_listing'])->name('front.cgGear.listing');
Route::get('/flights', [FrontendConroller::class, 'flight'])->name('front.flights');
Route::get('/gallery', [FrontendConroller::class, 'gallery'])->name('front.gallery');
Route::get('/car-rental/listing', [FrontendConroller::class, 'car_rental'])->name('front.car.rental');
Route::get('/category-tour-listing', [FrontendConroller::class, 'category_tour_listing'])->name('front.category.tour.listing');
Route::get('/product-listing', [FrontendConroller::class, 'product_listing'])->name('front.product_listing');
Route::get('/shop/carnival-listing', [FrontendConroller::class, 'carnival_listing_all'])->name('front.carnival_listing');
Route::get('/shop/event-listing', [FrontendConroller::class, 'shop_event_listing'])->name('front.shop_listing');
Route::get('/package/detail', [FrontendConroller::class, 'package_detail'])->name('front.package.detail');
Route::get('/shop', [FrontendConroller::class, 'shop_home'])->name('front.shop');
Route::get('/get-discounted', [FrontendConroller::class, 'getDiscounted'])->name('front.get_discounted');
Route::get('/mascamps-listing', [FrontendConroller::class, 'vendor_listing'])->name('front.vendors');
Route::get('/about-us/{slug}', [FrontendConroller::class, 'about_us'])->name('details.aboutUs');
Route::get('/carnival_member/{id}', [FrontendConroller::class, 'carnival_member'])->name('carnivalMember.detail');
Route::get('/shop/{slug}/event-listing', [FrontendConroller::class, 'myEvents'])->name('myEevent.listing');
Route::get('/{slug}/gallery', [FrontendConroller::class, 'myGallery'])->name('front.myGallery');
Route::get('/{slug}/music-gallery', [FrontendConroller::class, 'myMusicGallery'])->name('front.myMusicGallery');
Route::get('/get/album/imgs', [FrontendConroller::class, 'getAlbumImgs'])->name('front.album.imgs');
Route::get('/get/album/music', [FrontendConroller::class, 'getAlbumMusic'])->name('front.album.music');
Route::get('/contact-us', [FrontendConroller::class, 'contact_us'])->name('front.contact');
Route::get('/marketplace', [FrontendConroller::class, 'marketplace'])->name('front.marketplace');
Route::get('/compare-produts', [FrontendConroller::class, 'compare_produts'])->name('front.compare.produts');
Route::get('/track-order', [FrontendConroller::class, 'track_order'])->name('front.track.order');
Route::get('/blog-list', [FrontendConroller::class, 'blog_list'])->name('front.blog.list');
Route::get('/blog-detail/{id}', [FrontendConroller::class, 'blog_detail'])->name('front.blog.detail');
Route::get('/get-section-leaders', [FrontendConroller::class, 'sub_vendor_listing'])->name('get.subvendors.front');
Route::get('/shop/{slug}/detail', [FrontendConroller::class, 'vendor_detail'])->name('front.vendor.detail');
Route::get('/vendorByPhone/{phone}', [FrontendConroller::class, 'vendorByPhone'])->name('get.vendor.by.phone');
Route::get('/carnival/{slug}', [FrontendConroller::class, 'carnival_detail'])->name('front.carnival.detail');
Route::get('/get/shop/products/{slug}', [FrontendConroller::class, 'get_vendor_products'])->name('front.vendor.products');
Route::get('/get-products', [FrontendConroller::class, 'get_product'])->name('get.products.home');
Route::get('/shop/product/{slug}', [FrontendConroller::class, 'product_detail'])->name('get.products.detail');
Route::get('/get-vendors', [FrontendConroller::class, 'get_vendors'])->name('get.vendors.front');
Route::get('/get-carnivals', [FrontendConroller::class, 'get_carnivals'])->name('get.carnivals.front');
Route::get('/get-subvendors', [FrontendConroller::class, 'get_subVendors'])->name('get.subVvendors.front');
Route::get('/shop/section-leader/{slug}', [FrontendConroller::class, 'sub_vendor_detail'])->name('front.subVendor.detail');
Route::get('/get-events', [FrontendConroller::class, 'get_events'])->name('get.events');
Route::get('/{event_slug}/event-detail', [FrontendConroller::class, 'myEventDetail'])->name('get.myEvent.detail');
Route::get('/shop/model-listing', [FrontendConroller::class, 'modelListing'])->name('model.listing');
Route::get('/model/{slug}', [FrontendConroller::class, 'modelDetail'])->name('model.detail');
Route::get('/shop/artist-listing', [FrontendConroller::class, 'artistListing'])->name('artist.listing');
Route::get('/artist/{slug}', [FrontendConroller::class, 'artistDetail'])->name('artist.detail');
// Route::get('/music-detail/{slug}', [FrontendConroller::class, 'musicDetail'])->name('music.detail');
Route::get('/get-music', [FrontendConroller::class, 'get_music'])->name('get.musics.home');
Route::get('/shop/music/{slug}', [FrontendConroller::class, 'musicDetail'])->name('get.musics.detail');

// brand listing
Route::get('/shop/all-brands', [FrontendConroller::class, 'brand_listing'])->name('brand.listing');
Route::get('/get-brands', [FrontendConroller::class, 'get_brands'])->name('get.brands');

// models appointment
Route::get('{slug}/contact-us', [ModelBookingController::class, 'create'])->name('model.booking.create');
Route::post('contact-us/store', [ModelBookingController::class, 'store'])->name('model.booking.store');
Route::post('/contact-submit', [ContactController::class, 'submitForm'])->name('contact.submit');

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

// carnival commitee user
Route::get('/events/view-more/{slug}', [FrontendConroller::class, 'eventViewMore'])->name('events.view.more');
Route::get('/carnival/view-more/search', [FrontendConroller::class, 'carnivalViewMoreSearch'])->name('carnival.view.more.search');

// load carnival banner details
Route::get('/carnival-banner_details', [FrontendConroller::class, 'loadBannerDetails'])->name('front.carnival.banner_details');

Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe.store');


Route::middleware('auth')->group(function () {
    Route::get('/edit-Profile/{id}', [VendorController::class, 'editProfile'])->name('dashboard.edit.profile');
    Route::put('/users/{user}', [UserManagementController::class, 'update'])->name('users.update');
});

// auth routes
Route::middleware('auth')->group(function () {
    // Products Crud
    Route::resource('products', ProductController::class)->except(['update']);
    Route::post('/product/{product}', [ProductController::class, 'update'])->name('products.update');
    
    // Costumes Crud
    Route::resource('costumes', CostumeController::class);

    // Events Crud
    Route::resource('events', EventController::class);

    //blogs
    Route::resource('blogs', BlogsController::class)->except(['update']);
    Route::put('/blogs/{blog}', [BlogsController::class, 'update'])->name('blogs.update');
});

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
    Route::get('/categories/{id}/deletion-details', [CategoryController::class, 'getDeletionDetails'])->name('categories.deletion-details');

    // Subcategories Crud
    Route::resource('subcategories', SubcategoryController::class);
    Route::get('/subcategories/{subcategory}/deletion-details', [SubcategoryController::class, 'getDeletionDetails'])->name('subcategories.deletion-details');

    // Features Crud
    Route::resource('features', FeatureController::class);

    // States Crud
    Route::resource('states', StateController::class);

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

    // get features by category
    Route::get('/get-features/{categoryId}', [ProductController::class, 'getFeaturesByCategory'])->name('get.features.by.category');

    // user management
    Route::get('/users', [UserManagementController::class, 'indexUser'])->name('users.index');
    Route::get('/get-users', [UserManagementController::class, 'getUsers'])->name('admin.users.index');
    Route::get('/users/new', [UserManagementController::class, 'createUser'])->name('users.add');
    Route::post('/users/register', [UserManagementController::class, 'register'])->name('users.register');
    Route::get('/users/edit/{id}', [UserManagementController::class, 'edit'])->name('users.edit');
    // Route::put('/users/{user}', [UserManagementController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserManagementController::class, 'destroyUser'])->name('users.destroy');
    Route::get('/users/{user}/deletion-details', [UserManagementController::class, 'getDeletionDetails'])->name('users.deletion-details');
    Route::delete('banners/delete', [UserManagementController::class, 'delete'])->name('banners.delete');

    Route::get('/vendor-categories', [UserManagementController::class, 'getCategories'])->name('users.get.categories');

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

    // assign carnivals to mascamp
    Route::post('/assign/mascamps', [CarnivalController::class, 'assignModels'])->name('assign.models');
    Route::delete('carnivals/{carnival}/images/{image}', [CarnivalController::class, 'deleteImage'])
        ->name('carnivals.delete.image');
    Route::delete('carnivals/{carnival}/banners/{image}', [CarnivalController::class, 'deleteBanner'])
        ->name('carnivals.delete.banner');
    Route::delete('carnivals/{carnival}/flyers/{image}', [CarnivalController::class, 'deleteFlyer'])
        ->name('carnivals.delete.flyer');
    // assign carnivals to mascamp
    Route::post('/assign/carnival-member', [CarnivalController::class, 'assignCarnivalMember'])->name('assign.CarnivalMember');

    Route::get('carnivals/{id}/assigned-mascamps', [CarnivalController::class, 'getAssignedMascamps'])->name('carnivals.assigned.mascamps');

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
    Route::get('/get-placements/{carnival_id}', [EventsCountryTabController::class, 'getPlacementByCarnival'])->name('get.placements');

    // banner
    Route::resource('banners', BannerController::class);
    Route::get('/banners/{id}/deletion-details', [BannerController::class, 'getDeletionDetails'])->name('banners.deletion-details');

    // advertisements
    Route::resource('advertisements', AdvertisementController::class);

    Route::get('/faqs', [FAQController::class, 'index'])->name('faqs.index');
    Route::get('/faqs/create', [FAQController::class, 'create'])->name('faqs.create');
    Route::post('/faqs', [FAQController::class, 'store'])->name('faqs.store');
    Route::get('/faqs/{id}', [FAQController::class, 'show'])->name('faqs.show');
    Route::get('/faqs/{id}/edit', [FAQController::class, 'edit'])->name('faqs.edit');
    Route::put('/faqs/{id}', [FAQController::class, 'update'])->name('faqs.update');
    Route::delete('/faqs/{id}', [FAQController::class, 'destroy'])->name('faqs.destroy');
    Route::resource('advertisements', AdvertisementController::class);

    Route::get('/faqs_page', [FAQPageController::class, 'index'])->name('faqs_page.index');
    Route::get('/faqs_page/create', [FAQPageController::class, 'create'])->name('faqs_page.create');
    Route::post('/faqs_page', [FAQPageController::class, 'store'])->name('faqs_page.store');
    Route::get('/faqs_page/{id}', [FAQPageController::class, 'show'])->name('faqs_page.show');
    Route::get('/faqs_page/{id}/edit', [FAQPageController::class, 'edit'])->name('faqs_page.edit');
    Route::put('/faqs_page/{id}', [FAQPageController::class, 'update'])->name('faqs_page.update');
    Route::delete('/faqs_page/{id}', [FAQPageController::class, 'destroy'])->name('faqs_page.destroy');

    Route::get('/our-team', [OurTeamController::class, 'index'])->name('our_team.index');
    Route::get('/our-team/create', [OurTeamController::class, 'create'])->name('our_team.create');
    Route::post('/our-team', [OurTeamController::class, 'store'])->name('our_team.store');
    Route::get('/our-team/{id}', [OurTeamController::class, 'show'])->name('our_team.show');
    Route::get('/our-team/{id}/edit', [OurTeamController::class, 'edit'])->name('our_team.edit');
    Route::put('/our-team/{id}', [OurTeamController::class, 'update'])->name('our_team.update');
    Route::delete('/our-team/{id}', [OurTeamController::class, 'destroy'])->name('our_team.destroy');
});

Route::get('/get_single_user/{id}', [UserManagementController::class, 'getSingleUser'])->name('get.single.user');

Route::get('/get-countries', [CarnivalController::class, 'getCountriesByRegion'])->name('get.countries');
Route::get('/get-cities', [CarnivalController::class, 'getCitiesByCountry'])->name('get.cities');


// Vendor Routes
Route::middleware('vendor')->prefix('vendor')->group(function () {

    Route::get('/', [VendorController::class, 'index'])->name('vendor');

    // products
    Route::get('/products', [VendorProductController::class, 'index'])->name('vendor.products');
    Route::get('/products/add', [VendorProductController::class, 'create'])->name('vendor.products.create');
    Route::get('/products/edit/{id}', [VendorProductController::class, 'edit'])->name('vendor.products.edit');
    Route::post('/products/store', [ProductController::class, 'store'])->name('vendor.products.store');
    // Route::put('/products/update/{id}', [VendorProductController::class, 'update'])->name('vendor.products.update');
    Route::post('/product/{product}', [ProductController::class, 'update'])->name('vendor.products.update');

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

    // Create Vendor
    Route::post('/users/register', [UserManagementController::class, 'register'])->name('vendor.subvendor.register');
    Route::get('/subvendor/create', [VendorController::class, 'createSubvendor'])->name('vendor.subvendor.create');

    //Gallery CRUD
    // Route::resource('vendor_site_gallery', VendorGalleryController::class);
    Route::get('/vendor_site_gallery', [VendorGalleryController::class, 'index'])->name('vendor_site_gallery.index');
    Route::get('/vendor_site_gallery/create', [VendorGalleryController::class, 'create'])->name('vendor_site_gallery.create');
    Route::post('/vendor_site_gallery', [VendorGalleryController::class, 'store'])->name('vendor_site_gallery.store');
    Route::get('/vendor_site_gallery/{id}', [VendorGalleryController::class, 'show'])->name('vendor_site_gallery.show');
    Route::get('/vendor_site_gallery/{id}/edit', [VendorGalleryController::class, 'edit'])->name('vendor_site_gallery.edit');
    Route::put('/vendor_site_gallery/{id}', [VendorGalleryController::class, 'update'])->name('vendor_site_gallery.update');
    Route::delete('/vendor_site_gallery/{id}', [VendorGalleryController::class, 'destroy'])->name('vendor_site_gallery.destroy');

    // view my bokings
    Route::get('myBookings/', [AdminController::class, 'model_bookings'])->name('vendor.bookings');

    //musics
    Route::get('/musics', [MusicController::class, 'index'])->name('vendor.musics.index');
    Route::get('/musics/create', [MusicController::class, 'create'])->name('vendor.musics.create');
    Route::post('/musics', [MusicController::class, 'store'])->name('vendor.musics.store');
    Route::get('/musics/{id}', [MusicController::class, 'show'])->name('vendor.musics.show');
    Route::get('/musics/{id}/edit', [MusicController::class, 'edit'])->name('vendor.musics.edit');
    Route::put('/musics/{music}', [MusicController::class, 'update'])->name('vendor.musics.update');
    Route::delete('/musics/{id}', [MusicController::class, 'destroy'])->name('vendor.musics.destroy');

    // carnival committee
    Route::get('carnival-committee/', [VendorController::class, 'carnivalCommittee'])->name('vendor.carnival.committee');

    // my masbands(subvendrs)
    Route::get('my-masbands/', [VendorController::class, 'myMasbands'])->name('vendor.myMasbands');

    // Queen Show
    Route::get('queen-show/', [VendorController::class, 'queenShow'])->name('vendor.queen.show');
});


// SubVendor Routes
Route::middleware('subVendor')->prefix('subVendor')->group(function () {

    Route::get('/', [SubVendorController::class, 'index'])->name('subVendor');

    // products
    Route::get('/my_products', [SubVendorProductController::class, 'index'])->name('subVendor.products');
    Route::get('/products/add', [SubVendorProductController::class, 'create'])->name('subVendor.products.create');
    Route::get('/my_products/edit/{id}', [SubVendorProductController::class, 'edit'])->name('subVendor.products.edit');
    // Route::post('/products/store', [ProductController::class, 'store'])->name('subVendor.products.store');
    // Route::post('/my_products/store', [SubVendorProductController::class, 'store'])->name('subVendor.products.store');
    // Route::put('/my_products/update/{id}', [SubVendorProductController::class, 'update'])->name('subVendor.products.update');
    Route::post('/product/{product}', [ProductController::class, 'update'])->name('subVendor.products.update');

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

    //Gallery CRUD
    Route::get('/subvendor_site_gallery', [SubvendorGalleryController::class, 'index'])->name('subvendor_site_gallery.index');
    Route::get('/subvendor_site_gallery/create', [SubvendorGalleryController::class, 'create'])->name('subvendor_site_gallery.create');
    Route::post('/subvendor_site_gallery', [SubvendorGalleryController::class, 'store'])->name('subvendor_site_gallery.store');
    Route::get('/subvendor_site_gallery/{id}', [SubvendorGalleryController::class, 'show'])->name('subvendor_site_gallery.show');
    Route::get('/subvendor_site_gallery/{id}/edit', [SubvendorGalleryController::class, 'edit'])->name('subvendor_site_gallery.edit');
    Route::put('/subvendor_site_gallery/{id}', [SubvendorGalleryController::class, 'update'])->name('subvendor_site_gallery.update');
    Route::delete('/subvendor_site_gallery/{id}', [SubvendorGalleryController::class, 'destroy'])->name('subvendor_site_gallery.destroy');

    // view my bokings
    Route::get('myBookings/', [AdminController::class, 'model_bookings'])->name('subvendor.bookings');

    //musics
    Route::get('/musics', [MusicController::class, 'index'])->name('subvendor.musics.index');
    Route::get('/musics/create', [MusicController::class, 'create'])->name('subvendor.musics.create');
    Route::post('/musics', [MusicController::class, 'store'])->name('subvendor.musics.store');
    Route::get('/musics/{id}', [MusicController::class, 'show'])->name('subvendor.musics.show');
    Route::get('/musics/{id}/edit', [MusicController::class, 'edit'])->name('subvendor.musics.edit');
    Route::put('/musics/{music}', [MusicController::class, 'update'])->name('subvendor.musics.update');
    Route::delete('/musics/{id}', [MusicController::class, 'destroy'])->name('subvendor.musics.destroy');
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
Route::get('/get-carnivals/members/{id}', [CarnivalController::class, 'getCarnivalsMembers'])->name('get.carnivals.members');

Route::get('/carnivals/{carnival}/events', [CarnivalController::class, 'getEvents'])->name('carnivals.events.get');
Route::post('/carnivals/{carnival}/events', [CarnivalController::class, 'updateEvents'])->name('carnivals.events.update');

// stripe
Route::get('/stripe-test', [PaymentController::class, 'testStripe']);
Route::post('/charge', [PaymentController::class, 'chargeCustomer'])->name('stripe.charge');
Route::post('/split-payment', [PaymentController::class, 'splitPayment'])->name('stripe.split.payment');


// STRIPE_KEY=pk_test_xxxxxxxxxxxxx
// STRIPE_SECRET=sk_test_xxxxxxxxxxxxx