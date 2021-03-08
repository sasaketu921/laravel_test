<?php

use App\Http\Controllers\BuildingController;
use Illuminate\Support\Facades\Route;



Route::get('/building', function () {
    return '建物です';
});

Route::get("/building/{room}", [BuildingController::class, "roomNumber"]);