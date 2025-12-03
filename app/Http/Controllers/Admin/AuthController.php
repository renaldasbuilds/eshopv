<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;                      
use Illuminate\Support\Facades\Auth; 

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

        if(Auth::check()) {
            return redirect()
                    ->route('admin.index')
                    ->with('success','Jūs jau užsiregistravęs.');
        }

        $data = $request->validate([
                'name'     => ['required', 'string', 'max:100'],
                'email'    => ['required', 'string', 'email', 'max:100', 'unique:users,email'],
                'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect()
                    ->route('login')
                    ->with('success','Paskyra sėkmingai užregistruota!');
    }
}
