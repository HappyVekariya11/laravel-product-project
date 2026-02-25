<?php


use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
 
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Route::resource('products', ProductController::class);
   
  
});
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::resource('products',  \App\Http\Controllers\Admin\ProductController::class);
     Route::get('/products/{product}/product-variant', [\App\Http\Controllers\Admin\ProductVariantController::class, 'index'])->name('product-variant.index');
     Route::get('/products/{product}/product-variant/create', [\App\Http\Controllers\Admin\ProductVariantController::class, 'create'])->name('product-variant.create');
    Route::post('/products/{product}/product-variant', [\App\Http\Controllers\Admin\ProductVariantController::class, 'store'])->name('product-variant.store');
  
});

    
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
