<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ClientController;
use App\Models\Group;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/')->middleware('localization')->group(
    function () {
        Route::get('/', [ClientController::class, 'index'])->name('index');
        Route::get('shop', [ClientController::class, 'shop'])->name('shop');
        Route::get('shop/{slug}', [ClientController::class, 'productDetail'])->name('productDetail');
        Route::get('get-cart', [ClientController::class, 'getCart'])->name('getCart');
        Route::post('add-to-cart', [ClientController::class, 'addToCart'])->name('addToCart');
        Route::post('handle-actions-cart', [ClientController::class, 'handleActionsCart'])->name('handle-actions-cart');
        Route::get('checkout', [ClientController::class, 'checkout'])->name('checkout');
        Route::post('handle-checkout', [ClientController::class, 'handleCheckout'])->name('handleCheckout');
        Route::get('checkout/tracking', [ClientController::class, 'tracking'])->name('tracking');
        Route::get('news', [ClientController::class, 'news'])->name('news');
        Route::get('contact', [ClientController::class, 'contact'])->name('contact');
        Route::get('/lang/{locale}', [SettingController::class, 'changeLang'])->name('changeLang');
    }
);
Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/add', [categoryController::class, 'add'])->name('add');
        Route::post('/add', [categoryController::class, 'store'])->name('store');
        Route::get('/edit/{category}', [categoryController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [categoryController::class, 'update'])->name('update');
        Route::delete('/soft-delete/{id}', [categoryController::class, 'softDelete'])->name('soft-delete');
        Route::delete('/force-delete/{id}', [categoryController::class, 'forceDelete'])->name('force-delete');
        Route::delete('/restore/{id}', [categoryController::class, 'restore'])->name('restore');
    });
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/add', [ProductController::class, 'add'])->name('add');
        Route::post('/add', [ProductController::class, 'store'])->name('store');
        Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('/soft-delete/{id}', [ProductController::class, 'softDelete'])->name('soft-delete');
        Route::delete('/force-delete/{id}', [ProductController::class, 'forceDelete'])->name('force-delete');
        Route::delete('/restore/{id}', [ProductController::class, 'restore'])->name('restore');
    });
    Route::prefix('colors')->name('colors.')->group(function () {
        Route::get('/', [ColorController::class, 'index'])->name('index');
        Route::get('/add', [ColorController::class, 'add'])->name('add');
        Route::post('/add', [ColorController::class, 'store'])->name('store');
        Route::get('/edit/{color}', [ColorController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [ColorController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ColorController::class, 'delete'])->name('delete');
    });
    Route::prefix('sizes')->name('sizes.')->group(function () {
        Route::get('/', [SizeController::class, 'index'])->name('index');
        Route::get('/add', [SizeController::class, 'add'])->name('add');
        Route::post('/add', [SizeController::class, 'store'])->name('store');
        Route::get('/edit/{size}', [SizeController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [SizeController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [SizeController::class, 'delete'])->name('delete');
    });
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('index');
        Route::get('/list', [OrderController::class, 'list'])->name('list');
        Route::get('/view/{order}', [OrderController::class, 'orderDetail'])->name('orderDetail');
        Route::post('/change-status/{id}', [OrderController::class, 'changeStatus'])->name('changeStatus');
    });
    Route::prefix('users')->name('users.')->middleware('can:users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index')->can('view', User::class);
        Route::get('/list', [UserController::class, 'list'])->name('list')->can('view', User::class);
        Route::get('/add', [UserController::class, 'add'])->name('add')->can('create', User::class);
        Route::post('/store', [UserController::class, 'store'])->name('store')->can('create', User::class);
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit')->can('update', User::class);
        Route::put('/update/{id}', [UserController::class, 'update'])->name('update')->can('update', User::class);
        Route::post('/soft-delete/{id}', [UserController::class, 'softDelete'])->name('soft-delete')->can('delete', User::class);
        Route::post('/restore/{id}', [UserController::class, 'restore'])->name('restore')->can('delete', User::class);
        Route::post('/force-delete/{id}', [UserController::class, 'forceDelete'])->name('force-delete')->can('delete', User::class);
    });
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::put('/update', [ProfileController::class, 'update'])->name('update');
        Route::get('/change-password', [ProfileController::class, 'changePassword'])->name('change-password');
        Route::put('/change-password/{email}', [ProfileController::class, 'handleChangePassword'])->name('handle-change-password');
    });
    Route::prefix('permission')->name('permission.')->middleware('can:permission')->group(function () {
        Route::get('/', [PermissionController::class, 'index'])->name('index')->can('view', Group::class);
        Route::get('/add-role', [PermissionController::class, 'addRole'])->name('add-role')->can('create', Group::class);
        Route::post('/store-role', [PermissionController::class, 'storeRole'])->name('store-role')->can('create', Group::class);
        Route::get('/edit-role/{group}', [PermissionController::class, 'editRole'])->name('edit-role')->can('update', Group::class);
        Route::put('/update-role/{id}', [PermissionController::class, 'updateRole'])->name('update-role')->can('update', Group::class);
        Route::delete('/delete-role/{id}', [PermissionController::class, 'deleteRole'])->name('delete-role')->can('delete', Group::class);

        Route::get('/list-permission', [PermissionController::class, 'listPermission'])->name('list-permission');
        Route::post('/add-permission', [PermissionController::class, 'addPermission'])->name('add-permission');
        Route::get('/edit-permission/{module}', [PermissionController::class, 'editPermission'])->name('edit-permission');
        Route::put('/update-permission/{id}', [PermissionController::class, 'updatePermission'])->name('update-permission');
        Route::post('/delete-permission/{id}', [PermissionController::class, 'deletePermission'])->name('delete-permission');
    });
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::put('/', [SettingController::class, 'update'])->name('update');
    });
    Route::get('/library', function () {
        return view('admin.library.index');
    })->middleware('can:library')->name('library');
});
Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'handleLogin'])->name('handleLogin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/forgot-password', [AuthController::class, 'ForgotPassword'])->name('forgot-password');
    Route::post('/forgot-password', [AuthController::class, 'SendMailForgotPassword'])->name('SendMailForgotPassword');
    Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('resetPassword');
    Route::post('/reset-password', [AuthController::class, 'PostResetPassword'])->name('PostResetPassword');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
