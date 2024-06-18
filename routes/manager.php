<?php
use App\Http\Controllers\manager\ManagerController;


Route::prefix('manager')->middleware('manager')->group(function(){

    Route::get('showusers', [ManagerController::class, 'showusers'])
    ->name('showusersmanager');
    
    Route::get('getusers', [ManagerController::class, 'getusers'])
    ->name('getusers');

    Route::get('add_campaign',[ManagerController::class,'add_campaign'])->name('addCampaign');
    Route::post('add_campaign',[ManagerController::class,'store_campaign'])->name('storeCampaign');
    
    Route::get('show_campaign',[ManagerController::class,'show_campaign'])->name('showCampaign');
    Route::get('getcampaign', [ManagerController::class, 'getcampaign'])
    ->name('getcampaign');
});
