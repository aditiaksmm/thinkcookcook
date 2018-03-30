

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="{{asset ('p/css/style.css') }}">


<h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">Products</span>
    </h1>

<link rel="shortcut icon" href="{{asset('icon.png')}}">
@extends('layouts.user')
@section('content')
@foreach ($Lainnya as $data1) 

      <br>

          <nav class="navbar navbar-expand-lg navbar-dark py-lg-2" id="">
      <div class="container">
       
       
       
          <ul class="navbar-nav mx-auto">
           <li class="nav-tabs px-lg-1">
              <a class="nav-link text-uppercase text-expanded text-white" href="/products"><h5>All Product</h5></a>
            </li>
            
           @foreach ($kategori as $data2)
            <li class="nav-tabs px-lg-1">
              <a class="nav-link text-uppercase text-expanded text-white" href="{{route('showperkategori', $data2->id)}}"><h5>{!!$data2->nama_kategori!!}</h5></a>
            </li>
           @endforeach
          
          </ul>
        </div>
      </div>
    </nav>

<body style="background:linear-gradient(rgba(19,14,12,0.32),rgba(19,14,12,0.32)),url(../img/img1/{{$data1->cover}});
              background-repeat: no-repeat;
              background-size: cover; 
              background-attachment: fixed;">



         @foreach ($Product as $data)
 
    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
              <h2 class="section-heading mb-0">
                <span class="section-heading-lower"><i>{!!$data->nama_product!!}</i></span>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="/img/img7/{{$data->cover}}" width="700px" height="900px">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">

              <p class="mb-0"><center><h2><b><u>Details</u></b></h2></center>  <br>

                <table>
                  <tr>
                    <td>Material</td><td>&nbsp:&nbsp</td><td>{!!$data->bahan!!}</td>
                  </tr>
                  <tr>
                    <td>Color</td><td>&nbsp:&nbsp</td><td>{!!$data->warna!!}</td>
                  </tr>
                  <tr>
                    <td>Size</td><td>&nbsp:&nbsp</td><td>{!!$data->ukuran!!}</td>
                  </tr>
                </table>
              </p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
<br>
<br>
<br>  
<ul class="pagination modal-4">
   {{$Product->links('vendor.pagination.bootstrap-4')}}
</ul><br> 


    </section>

@endforeach

@endsection



<script src='https://codepen.io/fbrz/pen/9a3e4ee2ef6dfd479ad33a2c85146fc1.js'></script>

  

    <script  src="{{asset ('p/js/index.js') }}"></script>