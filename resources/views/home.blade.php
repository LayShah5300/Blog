@extends('user/app')

@section('bg-img',asset('user/img/about-bg.jpg'))
@section('title','Welcome to Home Page')
 @section('head')

 @endsection
@section('sub-heading','')


@section('main-content')
<!-- Post Content -->

  <article>
    <div class="container">
        <div class="row">

        </div>
      </div>
      
  </article>
  <hr>
@endsection
@section('footer')

@endsection

{{-- @extends('layouts.app') --}}

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
