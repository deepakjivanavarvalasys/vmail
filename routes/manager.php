<?php
use App\Http\Controllers\manager\ManagerController;


Route::prefix('manager')->middleware('manager')->group(function(){

    Route::get('showusers', [ManagerController::class, 'showusers'])
    ->name('showusers');
    
    Route::get('getusers', [ManagerController::class, 'getusers'])
    ->name('getusers');

 
    

});
