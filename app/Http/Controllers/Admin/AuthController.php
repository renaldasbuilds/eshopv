<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login() {
        return view('admin.auth.login');
    }
    public function register() {
        /*
        |--------------------------------------------------------------------------
        | Middleware tikrinam ar .env admin_register=1
        |--------------------------------------------------------------------------
        | */
        return view('admin.auth.register');
    }
    public function register_store(Request $request) {
        $data = $request->validate([

        ]);
    }
}
