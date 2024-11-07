<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('/EduFun')->group(function(){
    Route::get('/', [Controllers\HomeController::class, 'ShowPage']);
    Route::get('/AboutUs', [Controllers\AboutUsController::class, 'ShowPage']);

    Route::prefix('/Category/DataScience')->group(function(){
        Route::get('/', [Controllers\CategoryController::class, 'ShowPageDS']);
        Route::get('/MachineLearning', [Controllers\CategoryController::class, 'ShowPageMachineLearning']);
        Route::get('/DeepLearning', [Controllers\CategoryController::class, 'ShowPageDeepLearning']);
        Route::get('/NaturalLanguageProcessing', [Controllers\CategoryController::class, 'ShowPageNLP']);
    });

    Route::prefix('/Category/NetworkSecurity')->group(function(){
        Route::get('/', [Controllers\CategoryController::class, 'ShowPageNS']);
        Route::get('/SoftwareSecurity', [Controllers\CategoryController::class, 'ShowPageSoftwareSecurity']);
        Route::get('/NetworkAdministration', [Controllers\CategoryController::class, 'ShowPageNetworkAdministration']);
        Route::get('/PopularNetworkTechnology', [Controllers\CategoryController::class, 'ShowPagePNT']);
    });
    
    Route::get('/Detail', [Controllers\DetailController::class, 'ShowPage']);
    Route::get('/Popular', [Controllers\PopularController::class, 'ShowPage']);
    
    Route::prefix('/Writer')->group(function(){
        Route::get('/', [Controllers\WriterController::class, 'ShowPage']);
        Route::get('/DataScience', [Controllers\WriterController::class, 'ShowPageDSWriter']);
        Route::get('/NetworkSecurity', [Controllers\WriterController::class, 'ShowPageNSWriter']);
    });
});

