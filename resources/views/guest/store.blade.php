<h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">Details</span>
    </h1>

  <link rel="shortcut icon" href="{{asset('icon.png')}}">  
@foreach ($Lainnya as $data1) 
@extends('layouts.user')
@section('content')
 <body style="background:linear-gradient(rgba(19,14,12,0.32),rgba(19,14,12,0.32)),url(../img/img1/{{$data1->cover}});
              background-repeat: no-repeat;
              background-size: cover; 
              background-attachment: fixed;">

@foreach ($Store as $data) 


    <section class="page-section cta-inner">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center text-white rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">{!!$data->textkecilatas!!}</span>
                <span class="section-heading-lower">{!!$data->textbesaratas!!}</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <b>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Monday
                  <span class="ml-auto">{!!$data->Senin!!}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tuesday
                  <span class="ml-auto">{!!$data->Selasa!!}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Wednesday
                  <span class="ml-auto">{!!$data->Rabu!!}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Thursday
                  <span class="ml-auto">{!!$data->Kamis!!}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex text-primary">
                  Friday
                  <span class="ml-auto text-primary">{!!$data->Jumat!!}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                  <span class="ml-auto">{!!$data->Sabtu!!}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sunday
                  <span class="ml-auto">{!!$data->Minggu!!}</span>
                </li>
              </b>
              </ul>
              <p class="address mb-5">
                <p class="mb-0">
                
                  <b>To Contact:</b>
                <br>
                WhatsApp/Message/Call : {!!$data1->notlp!!}
                <br>
                Line : {!!$data1->line!!}
                <br>
                E-mail : {!!$data1->email!!}
              </p>
              <br>
              <br>

              <b>Or directly visit our Store :</b>
              <br>
              
              <p class="address mb-5">
                <em>
                  <strong>{!!$data1->alamat!!}</strong>
                </em>
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </section>
   <section class="page-section cta"><center>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.427597426667!2d106.80358831471175!3d-6.2071936625312825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6baac4b0f6b%3A0xf7ceedfeb3d60e70!2sThinkcookcook!5e0!3m2!1sid!2sid!4v1521341519550" width="1750" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></center>
</section>

    <!-- <section class="page-section about-heading">
      <div class="container">
        <center><img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="/img/img1/{{$data->cover}}" alt=""></center>
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">{!!$data->textkecilbold!!}</span>
                  <span class="section-heading-lower">{!!$data->textbesar!!}</span>
                </h2>
                <p>{!!$data->textkecil!!}</p>
              </div>
            </div>
          </div>
        </div>
      </div> -->
 

    </section>
@endforeach
@endforeach
@endsection