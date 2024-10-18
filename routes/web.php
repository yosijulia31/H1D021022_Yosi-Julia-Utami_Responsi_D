<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/api/user', function (Request $request) {
    return $request->user();
});

// Rute lainnya...

