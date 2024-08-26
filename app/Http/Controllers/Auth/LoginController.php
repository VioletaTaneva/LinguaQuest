<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/'; 

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        
        // If the user is banned, redirect to the login page.
        if ($this->attemptLogin($request) === 'banned') {
            return redirect()->back()->withErrors([
                'login' => 'You\'re banned. Oops.',
            ]);
        }

        //If the login was succsessful, redirect to the home page.
        if ($this->attemptLogin($request)) {
            $request->session()->regenerateToken();
            return redirect('/');
        }

        // If the login attempt was unsuccessful we will be redirect to log in page and told what info to put in.
        return redirect()->back()->withErrors([
            'login' => 'The email, username or password provided is incorrect.',
        ]);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'login' => 'required|string', //requred info to log in
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        // accepting either email or username FILTER_VALIDATE_EMAIL to check if it's an email format
        $loginType = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username'; 

        //find the user based on the login type
        // User = Model / $loginType = Column in the table / input('login') - the date we're searching for
        $user = User::where($loginType, $request->input('login'))->first();

                // If the user is banned, return 'banned'.
        if ($user && $user->is_banned == 1) {
            return 'banned';
        }

        //atempth to log in
        return Auth::attempt([
            $loginType => $request->input('login') ,
            'password' => $request->input('password'),
        ], $request->filled('remember')); //rember me
    }

    public function logout(Request $request)
    {
        //logs the user out
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
