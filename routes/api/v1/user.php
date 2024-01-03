<?php
    
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    
    Route::group([
        'prefix' => 'user',
        'as' => 'user.',
        'middleware' => ['auth:sanctum'],
    ], function () {
        Route::get('/', function (Request $request) {
            return $request->user();
        });
        Route::post('tokens/create', function (Request $request) {
            $token = $request->user()->createToken($request->token_name);
            
            return ['token' => $token->plainTextToken];
        });
    });