<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

session_start();
class LoginController extends BaseController
{
    public function index()
    {
        if (isset($_SESSION['user_id'])) {
            return redirect(url('/'));
        }

        return view('login');

    }

    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['registration'];
            $password = $_POST['password'];

            if ($id == '123' && $password == '123') {
                $_SESSION['id'] = $id;
                return redirect(url('/'));
            } else {
                echo "Login ou senha incorretos.";
            }
        }

    }

    public function logout()
    {

        session_unset();
        session_destroy();
        return redirect(url('/login'));

    }

}