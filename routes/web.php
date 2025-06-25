<?php

use App\Http\Controllers\HomeController;
use App\Models\Tenant;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomepageController;
use Stancl\Tenancy\Database\Models\Domain;
use Stancl\Tenancy\Resolvers\DomainTenantResolver;
use App\Http\Controllers\Tenant\DashboardController;


Route::middleware(['web'])->group(function () {
   Route::get('/home', [DashboardController::class, 'index'])->middleware('auth')->name('home');
});
Route::get('/', function () {
    return view('welcome');
});
