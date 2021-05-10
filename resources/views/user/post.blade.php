@extends('user/app')

@section('bg-img',Storage::disk('local')->url($post->image))
@section('title',$post->title)
 @section('head')
 <link href="{{asset('user/css/prism.css')}}" rel="stylesheet" type="text/css">
 @endsection
@section('sub-heading',$post->subtitle)


@section('main-content')
<!-- Post Content -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="t146UQfh">
</script>
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small>Created {{$post->created_at->diffForHumans()}}</small>
          
           @foreach ($post->categories as $category)
             <a href="{{ route('category', $category->slug) }}">
            <small class="fa-pull-right" style="margin-right: 20px;">
                    {{$category->name}} 
            </small>    
            </a>
                    
            @endforeach
            {!!$post->body !!}

            {{-- Tags --}}
            <h1>Tags</h1>
            <br>
            @foreach ($post->tags as $tag)
             <a href="{{ route('tag', $tag->slug) }}">
            <small style="margin-right: 20px; border: 1px solid gray; padding:5px; border-radius:5px;">
                   {{$tag->name}}
            </small>    
            </a>
            @endforeach
           
        </div>
        <br><br><br><br><br>
        
        <div class="fa-pull-right" style="margin-left: 300px;">
          <br><br>
          <hr>
<div class="fb-comments fa-pull-right" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
    </div>
  </div>
      </div>
      
  </article>

  <hr>
@endsection
@section('footer')
<script src="{{asset('user/js/prism.js')}}"></script>
@endsection