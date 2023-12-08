<?php

namespace App\Http\Controllers;

use view;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class Ranking extends Controller
{
    private $objUser;

    public function __construct()
    {
        $this->objUser= new User();
    }

    public function index()  
    {

        $User = DB::table('users')->join('tasks','users.id', '=', "tasks.user_id")->select('users.name as name', 'tasks.name as task')->get();
        // dd($User);
        return view("header")->with('User', $User).view("ranking", compact('User'));
    }
}
