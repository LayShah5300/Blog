@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title',"Lay's Blog")
@section('sub-heading','Welcome to the Blog')

@section('main-content')
 <!-- Main Content -->
  <div class="container">
    <div class="row">
      @foreach ($posts as $post)
              
        <div class="col-lg-8 col-md-10 mx-auto">

           <a href="{{route('post',$post->slug)}}">
              <h2 class="post-title">
                      {{$post->title}}
                  </h2>
                    <h3 class="post-subtitle">
                      {{$post->subtitle}}
                    </h3>
                  </a>
                  <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on {{$post->created_at->diffForHumans()}}</p>
        </div>
       
        <hr>
         @endforeach
      </div> 

      
        <!-- Pager -->
        <div class="clearfix fa-pull-right">
              {{$posts->links('pagination::bootstrap-4')}} 
         
        </div>
      </div>
    </div>
  </div>

  <hr>
  
@endsection