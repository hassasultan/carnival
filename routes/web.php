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
    return redirect()->route('login');
});

Route::get('/unauthorized', function () {
    return view('unauthorized');
})->name('unauthorized');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// Admin Routes
Route::middleware('admin')->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin');
    
    // Roles Crud
    Route::resource('roles', RoleController::class);
    
    // Permissions Crud
    Route::resource('permissions', PermissionsController::class);
    
    // RolesPermissions Crud
    Route::resource('role_permissions', RolePermissionController::class);
    
    // Packages Crud
    Route::resource('packages', PackageController::class);
    
    // Categories Crud
    Route::resource('categories', CategoryController::class);
    
    // Products Crud
    Route::resource('products', ProductController::class);
    
    // Events Crud
    Route::resource('events', EventController::class);
});


// Vendor Routes
Route::middleware('vendor')->prefix('vendor')->group(function () {

    Route::get('/', [VendorController::class, 'index'])->name('vendor');
});


// SubVendor Routes
Route::middleware('subVendor')->prefix('subVendor')->group(function () {

    Route::get('/', [SubVendorController::class, 'index'])->name('subVendor');
    
});