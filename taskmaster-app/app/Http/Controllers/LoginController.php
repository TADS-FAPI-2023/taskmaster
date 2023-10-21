<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        if (isset($_SESSION['user_id'])) {
            return redirect(url('/'));
        }

        return view('header') .view('welcome');

    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

   
        if (auth()->attempt(['name' => $request->name, 'password' => $request->password])) {
            $request->session()->regenerate();

          
            return redirect(url('/'));
        }
        
        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);

    }

    public function logout()
    {

       auth()->logout();
        return redirect(url('/login'));

    }

}