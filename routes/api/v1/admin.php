<?php

use App\Http\Controllers\Api\V1\Admin\NewsController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => 'admin',
    'as'         => 'admin.',
    'middleware' => ['auth'],
], function () {
    Route::apiResource('news', NewsController::class);
});