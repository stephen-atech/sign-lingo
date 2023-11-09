<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
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

Route::get('/storage/app/public/images/content/{filename}', function ($filename) {
    $path = storage_path('app/public/images/content/' . $filename);

    if (!File::exists($path)) {
        return abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->name('storage.content.show');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin.access']) ->group(function (){
        // level
        Route::get('/levels',[LevelController::class,'index'])->name('levels');
        Route::post('/level/add',[LevelController::class,'store'])->name('level.add');
        
        // category
        Route::get('/categories/{level}',[CategoryController::class,'index'])->name('level.category');
        Route::post('/category/add', [CategoryController::class, 'store'])->name('category.add');
        Route::delete('/category-delete{category}',[CategoryController::class, 'destroy'])->name('category.delete');
        
        // content
        Route::get('/contents/{category}',[ContentController::class,'index'])->name('contents');
        Route::post('/content/add', [ContentController::class, 'store'])->name('content.add');
        Route::put('/content/update', [ContentController::class, 'update'])->name('content.update');
        
        
        Route::get('/users', [HomeController::class, 'users'])->name('admin.users');
    });

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    

    Route::get('/levels/page',[LevelController::class,'index'])->name('user.levels');
    Route::get('/categories/{category}', [CategoryController::class, 'index'])->name('user.category');
    

});

Auth::routes();