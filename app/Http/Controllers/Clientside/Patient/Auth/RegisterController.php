<?php

namespace App\Http\Controllers\Clientside\Patient\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Patient\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $attributes = $request->validated();
        $attributes['role'] = 'patient';
        $user = User::create($attributes);
        if($user)
        {
            auth()->login($user);
        }
        return redirect()->route('home',['register' => "Done"])->with('success', 'User created successfully');


    }


}

