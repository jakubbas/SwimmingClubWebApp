<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;



use App\Http\Controllers\Controller;

//All Listings
Route::get('/listings', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings'=> Listing::all()
        
    ]);
}); 
//All single

Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing'=> Listing::find($id)
    ]);
}); 

Route::get('/test', function(){
    return response('<h1>Hi!<h1>', 200)
    ->header('Content-Type', 'text/plain')
    ->header('foo', 'bar')
    ->header('test1', 'result1');
});

Route::get('/posts/{id}', function($id){
    //ddd($id);
    return response('Post ' . $id,200);

})->where('id', '[0-9]+');

//ACTUAL WEBSITE

Route::get('/home', function () {
    return view('home');
}); 

Route::get('/login', function () {
    return view('login');
}); 

Route::get('/swimmers', function () {
    return view('/swimmers');
}); 

Route::get('/search', function (Request $request) {
    $forename = $request->input('forename');
    $surname = $request->input('surname');

    // Perform search logic here

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


Route::get('/register', [UserController::class, 'create']);

Route::post('/users', [UserController::class,'store']);