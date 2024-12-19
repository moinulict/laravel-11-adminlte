<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return response()->json([
        'message' => 'Welcome to ' . config('app.name'),
        'status' => 'success'
    ], 200);
});