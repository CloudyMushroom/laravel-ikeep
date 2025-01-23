<?php

use App\Http\Controllers\ikeepusercontroller;
use Illuminate\Support\Facades\Route;
use App\Models\ikeepuser;


/* Route::get('/account', function () {
    return view('pages.account');
}); */

Route::view('/', 'index');
Route::post('/accountadd', [ikeepusercontroller::class, 'StoreData']);
// Route::view('/account', 'pages.account');

