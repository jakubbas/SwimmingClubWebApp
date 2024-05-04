<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

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

Route::get('/search', function(Request $request){
    return ($request->name . ' ' . $request->city);
    //dd($request);
    //
});



//ACTUAL WEBSITE

Route::get('/home', function () {
    return view('home');
}); 

Route::get('/swimmer', function () {
    return view('swimmer');
}); 