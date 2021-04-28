<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Models\Model\user\post;
use App\Http\Controllers\Controller;

class PostControllerUser extends Controller
{
     public function post(post $post)
    {
        
        return view('user.post',compact('post'));
    }
}
