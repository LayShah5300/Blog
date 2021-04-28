@extends('user/app')

@section('bg-img',asset('user/img/post-bg.jpg'))
@section('title',$post->title)
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
            
            <small class="fa-pull-right" style="margin-right: 20px;">
                    {{$category->name}}
            </small>    
            
            @endforeach
            {!!$post->body !!}

            {{-- Tags --}}
            <h1>Tags</h1>
            <br>
            @foreach ($post->tags as $tag)
            
            <small style="margin-right: 20px; border: 1px solid gray; padding:5px; border-radius:5px;">
                    {{$tag->name}}
            </small>    
            
            @endforeach
           
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        <div class="fa-pull-right" style="margin-left: 350px;">
<div class="fb-comments fa-pull-right" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
    </div>
  </div>
      </div>
      
  </article>

  <hr>
@endsection