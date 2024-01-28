<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Page1', function () {
    return view('Page1', [
        'heading' => 'Header',
        'list' => [
            [
                'id' => 1,
                'name' => 'lmao',
                'city' => 'Hanoi'
            ],
            [
                'id' => 2,
                'name' => 'DunogPnahm',
                'city' => 'Hanoi'
            ]
        ],
        'prodList' => Product::all(),
        'firstProd' => Product::find(2)
    ]);
});

Route::get('/Page2/{i}', function($i) {
    return view('Page2', [
        'prod' => Product::find($i)
    ]);
});

Route::get('/Bruh/{i}', function ($i) {
    ddd($i);
    return ('<h1>Bruh</h1>' . $i);
})->where('i', '[0-9]+');

Route::get('/search', function (Request $request) {
    ddd($request->name . ' ' . $request->city);
});