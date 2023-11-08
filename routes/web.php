<?php

use App\Http\Controllers\HomeController;
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
});

Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin.access']) ->group(function (){
        Route::get('/admin-try', function(){
            dd('admin route');
        });
    });
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');