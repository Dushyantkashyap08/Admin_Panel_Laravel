<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CrudOperationsController;
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
// ViewController Route begins here 
Route::view('/', 'welcome');

Route::get('/home', [ViewController::class, 'home']);

Route::get('/page-summary',  [ViewController::class, 'page_summary'])->name('page.summary');

Route::get('/add-page',  [ViewController::class, 'add_page'])->name('add.page');

Route::get('/category-summary',  [ViewController::class, 'category_summary'])->name('category.summary');

Route::get('/add-category',  [ViewController::class, 'add_category'])->name('add.category');

Route::get('/product-summary',  [ViewController::class, 'product_summary'])->name('product.summary');

Route::get('/add-product',  [ViewController::class, 'add_product'])->name('add.product');

Route::get('/password',  [ViewController::class, 'password'])->name('password');
// ViewController Route ends here


// LoginController Route begins here
Route::post('/login-data', [LoginController::class, 'login_data'])->name('login.data');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// LoginController crud ends here


// add page crud begins here 
Route::post('/add-page-data',[CrudOperationsController::class, 'add_page_data'])->name('add.page.data');

Route::get('delete-data/{id}',[CrudOperationsController::class, 'delete_data']);

Route::get('edit-display/{id}',[CrudOperationsController::class, 'edit_display']);

Route::post('edit-data/{id}', [CrudOperationsController::class, 'edit_data']);

Route::post('/search',[CrudOperationsController::class, 'search'])->name('search');
// add page crud ends here



// add category crud begins here
Route::post('/add-category-data', [CrudController::class, 'add_category_data'])->name('add.category.data');

Route::get('category-delete-data/{id}', [CrudController::class, 'category_delete_data']);

Route::get('category-edit-display/{id}', [CrudController::class, 'category_edit_display']);

Route::post('category-edit-data/{id}', [CrudController::class, 'category_edit_data']);

Route::post('/search-category', [CrudController::class, 'search_category'])->name('search.category');
// add category crud ends here


// change password here 
Route::post('/change-password', [CrudController::class, 'change_password'])->name('change.password');


// add products crud begins here
Route::post('/add-product-data', [CrudController::class, 'add_product_data'])->name('add.product.data');

Route::get('product-delete-data/{id}', [CrudController::class, 'product_delete_data']);

Route::get('product-edit-display/{id}', [CrudController::class, 'product_edit_display']);

Route::post('product-edit-data/{id}', [CrudController::class, 'product_edit_data']);

Route::post('/search-product', [CrudController::class, 'search_product']);
// add products crud ends here