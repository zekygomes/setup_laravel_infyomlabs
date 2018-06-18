<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApiLoginController extends Controller
{
    public function logoutApi()
    {
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();

            return response([
                'message' => 'logout realizado com sucesso!'
            ],200);
        }
    }
}
