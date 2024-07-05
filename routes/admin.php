<?php
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\admin\AdminController;




Route::prefix('admin')->middleware('admin')->group(function (){
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('add_roles',[AdminController::class,'addroles'])->name('add_roles');    
    Route::post('add_roles',[AdminController::class,'submitroles'])->name('store_roles');    
    Route::get('showusers', [AdminController::class, 'showusers'])
    ->name('showusersadmin');
    
    Route::get('getusers', [AdminController::class, 'getusers'])
    ->name('getusers');
});
