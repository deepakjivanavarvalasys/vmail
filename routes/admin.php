<?php
use App\Http\Controllers\Auth\RegisteredUserController;




Route::middleware('web','admin')->group(function (){
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

});
