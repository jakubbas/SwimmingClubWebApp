<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function create(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:3'],
            'email' => 'required|email|unique:users|max:30',
            'password' => 'required|min:8',
            'surname' => 'required|string|max:100',
            'forename' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:100',
            'postcode' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $userData = $request->all();

        $userData['password'] = bcrypt($userData['password']);

        $user = User::create($userData);



        //login

        auth()->login($user);
        
        return view('home');

    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('home');
    }
    public function login(Request $request)
    {

        $credentials = [
            'name' => $request['username'],
            'password' => $request['password'],
        ];


        if (auth()->attempt($credentials)) {

            return (view('home'));
        }


        return redirect()->back()->withErrors('Incorrect information.')->withInput();
    }
}
