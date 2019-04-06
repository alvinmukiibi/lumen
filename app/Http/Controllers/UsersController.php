<?php

namespace App\Http\Controllers;
use App\User;
class UsersController extends Controller
{

    public function __construct()
    {
        //
    }
    public function getUser(){
        return response()->json(User::all());
    }

}
