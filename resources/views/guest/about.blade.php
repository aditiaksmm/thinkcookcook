<h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">Profile</span>
    </h1>

    
<link rel="shortcut icon" href="{{asset('icon.png')}}">

@extends('layouts.user')
@section('content')
@foreach ($Lainnya as $data) 
<body style="background:linear-gradient(rgba(19,14,12,0.32),rgba(19,14,12,0.32)),url(../img/img1/{{$data->cover}});
              background-repeat: no-repeat;
              background-size: cover; 
              background-attachment: fixed;">
@foreach ($About as $data) 



    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="/img/img1/{{$data->cover}}" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section mb-4">
                  <span class="section-heading-upper">{!!$data->textkecilbold!!}</span>
                  <span class="section-heading-lower">{!!$data->textbesar!!}</span>
                </h2>
                <p>{!!$data->textkecil!!}</p>
              </div>
            </div>
          </div>
       

    </section>
@endforeach
@endforeach
@endsection