<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Passport\HasApiTokens;

class UserController extends Controller
{
    public function Logout(Request $request){
        $request->user()->token()->revoke();
        return ['message' => 'Token Revoked'];
    }
}