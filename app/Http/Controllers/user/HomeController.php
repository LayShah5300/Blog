<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Models\Model\user\tag;
use App\Models\Model\user\post;
use App\Models\Model\user\category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        $posts =post::where('status',1)->orderBy('created_at','DESC')->paginate(3);
        return view('user.blog',compact('posts'));
    }
    public function tag(tag $tag)
    {
       $posts = $tag->posts();
       return view('user.blog',compact('posts'));
    }
    public function category(category $category)
    {
        $posts = $category->posts();
       return view('user.blog',compact('posts'));
    }

}
