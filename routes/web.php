<?php

use App\Http\Controllers\Example\AnimalController;
use App\Http\Controllers\Example\CategoryController;
use App\Http\Controllers\Example\PostController;
use App\Http\Controllers\Example\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\TechnicanController;
use App\Http\Controllers\Maintenance_recordController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Service_detailController;
use App\Http\Controllers\Servive_historieController;
use App\Http\Controllers\Spare_usedController;
use App\Http\Controllers\Technican_assignmentController;
use App\Http\Controllers\Vehicle_historyController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Products\ProductList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    //rutas de ejemplo sin controlador con prefijo
    Route::prefix('/ejemplo')->group(function () {
        Route::get('/index', fn () => view('examples.ejemplo.index'))->name('ejemplo.index');
        Route::get('/create', fn () => view('examples.ejemplo.create'))->name('ejemplo.create');
        Route::get('/edit', fn () => view('examples.ejemplo.edit'))->name('ejemplo.edit');
        Route::get('/show', fn () => view('examples.ejemplo.show'))->name('ejemplo.show');
    });

    //rutas con controlador y prefix
    Route::prefix('/categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
    });

    Route::prefix('/posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('posts.index');
        Route::get('/create', [PostController::class, 'create'])->name('posts.create');
        Route::post('/', [PostController::class, 'store'])->name('posts.store');
        Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::put('/{post}', [PostController::class, 'update'])->name('posts.update');
        Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
        Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
    });

    Route::prefix('/animals')->group(function () {
        Route::get('/', [AnimalController::class, 'index'])->name('animals.index');
        Route::get('/create', [AnimalController::class, 'create'])->name('animals.create');
        Route::post('/', [AnimalController::class, 'store'])->name('animals.store');
        Route::get('/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
        Route::put('/{animal}', [AnimalController::class, 'update'])->name('animals.update');
        Route::delete('/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');
        Route::get('/{animal}', [AnimalController::class, 'show'])->name('animals.show');
    });

    //rutas de posts de tipo resource
     Route::resource('/clients', ClientController::class);
     Route::resource('/owners', OwnerController::class);
     Route::resource('/reports', ReportController::class);
     Route::resource('/vehicles', VehicleController::class);
     Route::resource('/technicans', TechnicanController::class);
     Route::resource('/maintenance_records', Maintenance_recordController::class);
     Route::resource('/appointments', AppointmentController::class);
     Route::resource('/service_details', Service_detailController::class);
     Route::resource('/service_histories', Service_historieController::class);
     Route::resource('/spare_useds', Spare_usedController::class);
     Route::resource('/technican_assignments', Technican_assignmentController::class);
     Route::resource('/vehicles_historys', Vehicle_historyController::class);

    // Route::resource('/categories', CategoryController::class);
    // Route::resource('/animals', AnimalController::class);
});

require __DIR__ . '/auth.php';
