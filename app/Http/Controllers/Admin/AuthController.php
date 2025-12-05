<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
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
    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
                ->route('home.index')
                ->with('success','Sėkmingai atsijungta');
    }
    public function login_store(Request $request) { 
        $data = $request->validate([
            'email'    => ['required','email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()
                    ->route('admin.index')
                    ->with('success','Prisijungta!');
        }
        
        return redirect()
                ->back()
                ->with('error','Neteisingi prisijungimo duomenys!');

    }
    public function register_store(Request $request) {

        $user = Auth::user();
        if($user && $user->is_admin) {
            return redirect()
                    ->route('admin.index')
                    ->with('warning','Jūs jau užsiregistravęs.');
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
