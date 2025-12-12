<?php

use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarnivalCommitteeController;
use App\Http\Controllers\CarnivalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CostumeController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventsCountryTabController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FAQPageController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontendConroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\ModelBookingController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteGalleryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserAccountDetailController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\VariantController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// ✅ Frontend Routes Group
Route::controller(FrontendConroller::class)->group(function () {
    Route::get('/', 'home')->name('front.home');
    Route::get('/aboutus', 'aboutus')->name('front.aboutus');
    Route::get('/get-carnival-things', 'getCarnivalThings')->name('get.carnival.things');
    Route::get('/travel', 'travel')->name('front.travel');
    Route::get('/get-carnivals-by-region/{id}', 'get_carnivals_by_region')->name('front.getCarnivalsbyRegion');
    Route::get('/get-carnivals-by-region-for-home/{id}', 'get_carnivals_by_region_for_home')->name('front.getCarnivalsbyRegionForHome');
    Route::get('/carnival-listing', 'carnival_listing')->name('front.carnival.listing');
    Route::get('/event-listing', 'event_listing')->name('front.event.listing');
    Route::get('/tour-listing', 'tour_listing')->name('front.tour.listing');
    Route::get('/flight-listing', 'flight_listing')->name('front.flight.listing');
    Route::get('/hotel-listing', 'hotel_listing')->name('front.hotel.listing');
    Route::get('/CG_Gear-listing', 'cgGear_listing')->name('front.cgGear.listing');
    Route::get('/flights', 'flight')->name('front.flights');
    Route::get('/gallery', 'gallery')->name('front.gallery');
    Route::get('/car-rental/listing', 'car_rental')->name('front.car.rental');
    Route::get('/category-tour-listing', 'category_tour_listing')->name('front.category.tour.listing');
    Route::get('/product-listing', 'product_listing')->name('front.product_listing');
    Route::get('/shop/carnival-listing', 'carnival_listing_all')->name('front.carnival_listing');
    Route::get('/shop/event-listing', 'shop_event_listing')->name('front.shop_listing');
    Route::get('/package/detail', 'package_detail')->name('front.package.detail');
    Route::get('/shop', 'shop_home')->name('front.shop');
    Route::get('/get-discounted', 'getDiscounted')->name('front.get_discounted');
    Route::get('/mascamps-listing', 'vendor_listing')->name('front.vendors');
    Route::get('/about-us/{slug}', 'about_us')->name('details.aboutUs');
    Route::get('/carnival_member/{id}', 'carnival_member')->name('carnivalMember.detail');
    Route::get('/shop/{slug}/event-listing', 'myEvents')->name('myEevent.listing');
    Route::get('/{slug}/gallery', 'myGallery')->name('front.myGallery');
    Route::get('/{slug}/music-gallery', 'myMusicGallery')->name('front.myMusicGallery');
    Route::get('/get/album/imgs', 'getAlbumImgs')->name('front.album.imgs');
    Route::get('/get/album/music', 'getAlbumMusic')->name('front.album.music');
    Route::get('/contact-us', 'contact_us')->name('front.contact');
    Route::get('/marketplace', 'marketplace')->name('front.marketplace');
    Route::get('/compare-produts', 'compare_produts')->name('front.compare.produts');
    Route::get('/track-order', 'track_order')->name('front.track.order');
    Route::get('/blog-list', 'blog_list')->name('front.blog.list');
    Route::get('/blog-detail/{id}', 'blog_detail')->name('front.blog.detail');
    Route::get('/get-section-leaders', 'sub_vendor_listing')->name('get.subvendors.front');
    Route::get('/shop/{slug}/detail', 'vendor_detail')->name('front.vendor.detail');
    Route::get('/vendorByPhone/{phone}', 'vendorByPhone')->name('get.vendor.by.phone');
    Route::get('/carnival/{slug}', 'carnival_detail')->name('front.carnival.detail');
    Route::get('/get/shop/products/{slug}', 'get_vendor_products')->name('front.vendor.products');
    Route::get('/get-products', 'get_product')->name('get.products.home');
    Route::get('/shop/product/{slug}', 'product_detail')->name('get.products.detail');
    Route::get('/get-vendors', 'get_vendors')->name('get.vendors.front');
    Route::get('/get-carnivals', 'get_carnivals')->name('get.carnivals.front');
    Route::get('/get-subvendors', 'get_subVendors')->name('get.subVvendors.front');
    Route::get('/shop/section-leader/{slug}', 'sub_vendor_detail')->name('front.subVendor.detail');
    Route::get('/get-events', 'get_events')->name('get.events');
    Route::get('/{event_slug}/event-detail', 'myEventDetail')->name('get.myEvent.detail');
    Route::get('/shop/model-listing', 'modelListing')->name('model.listing');
    Route::get('/model/{slug}', 'modelDetail')->name('model.detail');
    Route::get('/shop/artist-listing', 'artistListing')->name('artist.listing');
    Route::get('/artist/{slug}', 'artistDetail')->name('artist.detail');
    Route::get('/get-music', 'get_music')->name('get.musics.home');
    Route::get('/shop/music/{slug}', 'musicDetail')->name('get.musics.detail');
    Route::get('/shop/all-brands', 'brand_listing')->name('brand.listing');
    Route::get('/get-brands', 'get_brands')->name('get.brands');
    Route::get('/events/view-more/{slug}', 'eventViewMore')->name('events.view.more');
    Route::get('/carnival/view-more/search', 'carnivalViewMoreSearch')->name('carnival.view.more.search');
    Route::get('/carnival-banner_details', 'loadBannerDetails')->name('front.carnival.banner_details');
});

// get features by category

Route::get('/get-features/{categoryId}', [ProductController::class, 'getFeaturesByCategory'])->name('get.features.by.category');

// ✅ Subscriber
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe.store');

// ✅ Model Booking & Contact
Route::get('{slug}/contact-us', [ModelBookingController::class, 'create'])->name('model.booking.create');
Route::post('contact-us/store', [ModelBookingController::class, 'store'])->name('model.booking.store');
Route::post('/contact-submit', [ContactController::class, 'submitForm'])->name('contact.submit');

// ✅ Cart
Route::get('/add_to_cart', [AddToCartController::class, 'addCart'])->name('add.to.cart');
Route::get('/check-out', [AddToCartController::class, 'checkout'])->name('check.out');
Route::get('/remove/to/cart/{id}', [AddToCartController::class, 'remove'])->name('remove.to.cart');
Route::post('/cart/update', [AddToCartController::class, 'update'])->name('update.cart');

// ✅ Utility routes
Route::get('/get-subcategories/{categoryId}', [ProductController::class, 'getsubCategories'])->name('get.subcategories');
Route::get('/register/new/user/{id}', [CarnivalCommitteeController::class, 'create'])->name('register.new.user');
Route::get('/unauthorized', fn () => view('unauthorized'))->name('unauthorized');
Route::get('/get_single_user/{id}', [UserManagementController::class, 'getSingleUser'])->name('get.single.user');
Route::get('/get-countries', [CarnivalController::class, 'getCountriesByRegion'])->name('get.countries');
Route::get('/get-cities', [CarnivalController::class, 'getCitiesByCountry'])->name('get.cities');

// customer
Route::get('/user-login', [CustomerController::class, 'login'])->name('customer.login');
Route::get('/user-register', [CustomerController::class, 'register'])->name('customer.register');
Route::post('/user-store', [CustomerController::class, 'storeCustomer'])->name('customer.users.register');

// ✅ Auth & Profile Routes
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/edit-Profile/{id}', [VendorController::class, 'editProfile'])->name('dashboard.edit.profile');
    Route::put('/users/{user}', [UserManagementController::class, 'update'])->name('users.update');
    Route::prefix('user')->group(function () {
        Route::get('/', [CustomerController::class, 'profile'])->name('users.profile');
        Route::post('/profile/update', [CustomerController::class, 'profileUpdate'])->name('users.profile.update');
    });

    // stripe payment
    Route::get('/stripe-test', [PaymentController::class, 'testStripe']);
    Route::post('/charge', [PaymentController::class, 'chargeCustomer'])->name('stripe.charge');
    Route::post('/split-payment', [PaymentController::class, 'splitPayment'])->name('stripe.split.payment');

    Route::get('/account-details', [UserAccountDetailController::class, 'createEdit'])->name('account.details');
    Route::post('/account-details', [UserAccountDetailController::class, 'storeOrUpdate'])->name('account.details.save');
});

// ✅ Admin & Dashboard Routes (with middleware)
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/get-categories/{packageId}', [EventController::class, 'getCategories'])->name('get.categories');

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

    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionsController::class);
    Route::resource('role_permissions', RolePermissionController::class);
    Route::post('/get_permissions', [RolePermissionController::class, 'getPermissions'])->name('get_permissions_by_role');
    Route::post('/get-permissions-by-package', [RolePermissionController::class, 'getPermissions'])->name('get_permissions_by_package');
    Route::delete('role-permissions/{package}/{permission}', [RolePermissionController::class, 'detachPermission'])->name('role_permissions.detach');
    Route::resource('packages', PackageController::class);
    Route::resource('products', ProductController::class)->except(['update']);
    Route::post('/product/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::resource('costumes', CostumeController::class);
    Route::resource('events', EventController::class);
    Route::resource('blogs', BlogsController::class)->except(['update']);
    Route::put('/blogs/{blog}', [BlogsController::class, 'update'])->name('blogs.update');
    Route::resource('categories', CategoryController::class);
    Route::get('/categories/{id}/deletion-details', [CategoryController::class, 'getDeletionDetails'])->name('categories.deletion-details');
    Route::resource('subcategories', SubcategoryController::class);
    Route::resource('features', FeatureController::class);
    Route::resource('states', StateController::class);
    Route::resource('musics', MusicController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('orders', OrderController::class);
    Route::get('orders/{id}/invoice', [OrderController::class, 'invoice'])->name('orders.invoice');
    Route::get('orders/{id}/invoice/pdf', [OrderController::class, 'invoicePdf'])->name('orders.invoice.pdf');
    Route::resource('carnivals', CarnivalController::class);
    Route::resource('regions', RegionController::class);
    Route::resource('our_services', OurServiceController::class);
    Route::resource('site_gallery', SiteGalleryController::class);
    Route::resource('investors', InvestorController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('countries', CountryController::class);
    Route::resource('cities', CityController::class);
    Route::resource('events_country_tabs', EventsCountryTabController::class);
    Route::resource('testimonials', TestimonialsController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('advertisements', AdvertisementController::class);
    Route::get('api/cities/{country_id}', [EventsCountryTabController::class, 'getCitiesByCountry'])->name('get.cities.by.country');
    Route::get('/get-placements/{carnival_id}', [EventsCountryTabController::class, 'getPlacementByCarnival'])->name('get.placements');
    Route::get('/faqs', [FAQController::class, 'index'])->name('faqs.index');
    Route::get('/faqs/create', [FAQController::class, 'create'])->name('faqs.create');
    Route::post('/faqs', [FAQController::class, 'store'])->name('faqs.store');
    Route::get('/faqs/{id}', [FAQController::class, 'show'])->name('faqs.show');
    Route::get('/faqs/{id}/edit', [FAQController::class, 'edit'])->name('faqs.edit');
    Route::put('/faqs/{id}', [FAQController::class, 'update'])->name('faqs.update');
    Route::delete('/faqs/{id}', [FAQController::class, 'destroy'])->name('faqs.destroy');
    Route::resource('faqs_page', FAQPageController::class);
    Route::resource('our-team', OurTeamController::class);

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

    // appointments
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

});

// Misc Routes
Route::get('/get-carnivals/members/{id}', [CarnivalController::class, 'getCarnivalsMembers'])->name('get.carnivals.members');

Route::get('/carnivals/{carnival}/events', [CarnivalController::class, 'getEvents'])->name('carnivals.events.get');
Route::post('/carnivals/{carnival}/events', [CarnivalController::class, 'updateEvents'])->name('carnivals.events.update');
