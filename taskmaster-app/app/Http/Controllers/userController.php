<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class userController extends Controller
{
    private $objUser;

    public function __construct()
    {
        $this->objUser= new User();
    }

    public function index()
    {
        $User = DB::table('users')
        ->join('tasks','users.id', '=', "tasks.user_id")
        ->select('users.name as name', 'tasks.name as task')->get()->toArray();
        // dd($User);
        $task = DB::table('tasks')->get();


        // return view('header') . view('ranking')->with('User', $User);
        return view('header'). view('ranking')->with(['User' => $User, 'tasks' => $task]);
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
