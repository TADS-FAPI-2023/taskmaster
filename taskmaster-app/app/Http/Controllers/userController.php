<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\userRequest;
use Illuminate\Http\Request;
use App\Models\User;


class userController extends Controller
{
    private $objUser;

    public function __construct()
    {
        $this->objUser= new User();
    }

    public function index()
    {
        $User = $this->objUser->all();
        return view('users.index', compact('User'));
    }


    public function create()
    {
        return view('users.create');
    }

    public function store(userRequest $request)
    {
        $cad=$this->objUser->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'cpf'=>$request->cpf,
            'password'=>$request->password,
        ]);

        if($cad){
            return redirect('Users');
        }
    }
}
