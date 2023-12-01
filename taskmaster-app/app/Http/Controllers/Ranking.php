<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class Ranking extends Controller
{
    private $objUser;

    public function __construct()
    {
        $this->objUser= new User();
    }

    public function index()  
    {

        $User = $this->objUser->all();

        return view("header")->with('User', $User)->view("ranking", compact('User'));
    }
}
