<?php

use App\Http\Controllers\ikeepusercontroller;
use Illuminate\Support\Facades\Route;
use App\Models\ikeepuser;
use App\Livewire\Account;
use App\Livewire\Login;
use App\Livewire\About;


/* Route::get('/account', function () {
    return view('pages.account');
}); */

// Route::get('/account', Account::class);
// Route::view('/account', 'pages.account');

Route::get('/', Login::class);
Route::get('/account', Account::class);
Route::get('/about', About::class);


Route::post('/accountadd', [ikeepusercontroller::class, 'StoreData']);


