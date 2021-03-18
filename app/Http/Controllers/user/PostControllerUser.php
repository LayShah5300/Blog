<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostControllerUser extends Controller
{
     public function __invoke()
    {
        return view('user.post');
    }
}
