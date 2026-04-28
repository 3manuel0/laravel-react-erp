<?php
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json([
        'message' => 'Backend is alive!',
        'status' => 'success',
        'timestamp' => now()
    ]);
});