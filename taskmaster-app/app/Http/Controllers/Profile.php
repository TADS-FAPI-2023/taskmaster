<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class Profile extends Controller
{
    public function __construct()
    {
        $this->objUser= new User();
    }

    public function profile($id)
    {
        $User = $this->objUser->all();
        $event = User::findOrFail($id);

        $userProfile = User::where('id', $event->id)->first()->toArray();
        return view("header") . view("profile", ['id' => $id, 'userProfile' => $userProfile], compact('User'));
    }
}

