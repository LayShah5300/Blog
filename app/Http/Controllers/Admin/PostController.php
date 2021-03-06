<?php

namespace App\Http\Controllers\Admin;

use App\Models\Model\user\post;
use App\Models\Model\user\post_tag;
use App\Models\Model\user\category_post;
use App\Models\Model\user\category;
use App\Models\Model\user\tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = post::paginate(2);
         $posts = post::all();
        return view('admin.post.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags= tag::all();
        $categories= category::all();
        return view('admin.post.post',compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
        $this->validate($request,[
            'title'=>'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image' =>' required',
        ]);

         if($request->hasFile('image'))
            {
                $imageName = $request->image->store('public');
            }
       
        $post = new post;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->status = $request->status;
        $post->body = $request->body;
        $post->image = $imageName;
        
        $post->save();
         $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $post= post::with('tags','categories')->where('id',$id)->first();
        $tags= tag::all();
        $categories= category::all();
        return view('admin.post.edit',compact('tags','categories','post'));
        

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request->all();
         $this->validate($request,[
            'title'=>'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image' =>' required',
        ]);
         if($request->hasFile('image'))
            {
                $imageName = $request->image->store('public');
            }
        
        $post = post::find($id);
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->status = $request->status;
        $post->image = $imageName;
        $post->body = $request->body;
            
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        $post->save();
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        post_tag::where('post_id',$id)->delete();
        category_post::where('post_id',$id)->delete();
        return redirect()->back();
    }
}
