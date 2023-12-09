<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\NasikotakController;
use App\Http\Controllers\Admin\MessageController;


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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('detail', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');

Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('contact', [App\Http\Controllers\HomeController::class, 'contactStore'])->name('contact.store');


Route::group(['middleware' => 'is_admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('nasikotaks/create', [NasikotakController::class, 'create'])->name('nasikotak.create');
    Route::get('nasikotaks/create/edit', [NasikotakController::class, 'edit'])->name('nasikotak.edit');
    Route::put('nasikotaks/update-image{id}', [\App\Http\Controllers\Admin\NasikotakControllerollers\Admin\NasikotakController::class, 'updateImage'])->name('nasikotaks.updateImage');

    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('messages',[\App\Http\Controllers\Admin\DashboardController::class,'index' ])->name('messages.index');
    Route::delete('messages/{message}',[\App\Http\Controllers\Admin\MessageController::class,'destroy' ])->name('messages.destroy');
});

Auth::routes();

