<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function Welcome(){
        return "<h1>Hello, Laravel! </h1> ";
    }

}
