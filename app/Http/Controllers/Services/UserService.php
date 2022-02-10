<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserService
{
    public static function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $success = true;
            $message = 'User login successfully';
        } else {
            $success = false;
            $message = 'Unauthorised';
        }
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }

    public static function logout()
    {
        try {
            Session::flush();
            $success = true;
            $message = 'Successfully logged out';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }
}
