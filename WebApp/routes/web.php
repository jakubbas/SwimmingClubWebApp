<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;



use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;

//ACTUAL WEBSITE

Route::get('/home', function () {
    return view('home');
}); 

Route::get('', function () {
    return view('home');
}); 

Route::get('/login', function () {
    return view('login');
}); 

Route::get('/register', function () {
    return view('register');
}); 

Route::get('/register/success', function () {
    return view('home');
});

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::post('/register', [AuthController::class, 'create']);

Route::get('/swimmers', function () {
    return view('/swimmers');
}); 

Route::get('/search', function (Request $request) {
    $forename = $request->input('forename');
    $surname = $request->input('surname');

    $users = User::where('forename', 'like', "%$forename%")
    ->where('surname', 'like', "%$surname%")
    ->get();
    
    return view('swimmers', [
        'forename' => $forename,
        'surname' => $surname,
        'users' => $users,
    ]);

})->name('search');

Route::get('/swimmers/{id}', function ($id) {
    return view('/swimmer', [
        'user'=> User::find($id)
    ]);
}); 


//Route::get('/register', [UserController::class, 'create']);

//Route::post('/users', [UserController::class,'store']);