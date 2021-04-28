<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Models\Model\user\post;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        $posts =post::where('status',1)->paginate(2);
        return view('user.blog',compact('posts'));
    }
}
