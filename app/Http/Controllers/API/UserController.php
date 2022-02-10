<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        return UserService::login($request);
    }

    public function logout()
    {
        return UserService::logout();
    }
}
