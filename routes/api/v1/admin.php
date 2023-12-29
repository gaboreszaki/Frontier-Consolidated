<?php

use App\Http\Controllers\Api\V1\Admin\NewsController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => 'admin',
    'as'         => 'admin.',
    'middleware' => ['auth:sanctum'],
], function () {
    Route::apiResource('news', NewsController::class);

});