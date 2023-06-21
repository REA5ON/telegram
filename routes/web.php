<?php

use App\Http\Controllers\BotController;
use App\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;

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

Route::post('/webhook', WebhookController::class);

Route::get('/test', function () {
    return response('Hello Viktor!!!', 200);
});

Route::get('/send', [BotController::class, 'send']);
Route::get('/get_me', [BotController::class, 'getMe']);

Route::get('/debug', function () {
    $debugArr = [
        'key1' => [
            'key1' => 1,
            'key2' => 2
        ],
        'key2' => 2
    ];

    dd($debugArr);
});
