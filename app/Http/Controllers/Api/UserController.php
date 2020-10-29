<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function login(Request $request)
    {
        $input = [
            'email' => 'dennysaug@gmail.com',
            'password' => 'root'
        ];

        $user = User::where('email', '=', $input['email'])->first();

        return $user;

    }

}
