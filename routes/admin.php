<?php
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\admin\AdminController;




Route::prefix('admin')->middleware('admin')->group(function (){
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('add_roles',[AdminController::class,'addroles']);    
    Route::post('add_roles',[AdminController::class,'submitroles']);    

});
