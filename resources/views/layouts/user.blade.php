<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="{{asset('icon.png')}}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Thinkcookcook</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset ('user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('p/css/style.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{asset ('user/css/business-casual.min.css') }}" rel="stylesheet">

  </head>

 <!--  <form action="{{ url()->current() }}">
    <div class="col-md-2">
        <input type="text" name="/model" class="form-control" placeholder="Search categories">
    </div>
    <div class="col-md-1">
        <button type="submit" class="btn btn-primary">
            Search
        </button>
    </div>
</form> -->

 

    <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="">
        <div class="container">
          <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Thinkcookcook</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
              <!-- <li class="nav-tabs px-lg-4"> -->
                <h1>
                  <ul class="navbar-nav mx-auto">
           <li class="nav-tabs px-lg-1">
                <a class="nav-link text-uppercase text-expanded text-white" href="/"><h2>Home</h2>
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-tabs px-lg-4">
                <a class="nav-link text-uppercase text-expanded text-white" href="/about"><h2>Profile</h2></a>
              </li>
              <li class="nav-tabs px-lg-4">
                <a class="nav-link text-uppercase text-expanded text-white" href="/products"><h2>Products</h2></a>
              </li>
              <li class="nav-tabs px-lg-4">
                <a class="nav-link text-uppercase text-expanded text-white" href="/store"><h2>Details</h2></a>
              </li>
             
              </li>
            </ul>
            </h1>
            </ul>
          </div>
        </div>
      </nav>



  @include('layouts._flash')
        @yield('content')
        
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5abe62014b401e45400e36a4/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->  






   <br>
<!-- <a href="https://info.flagcounter.com/eyKu"><img src="https://s11.flagcounter.com/count2/eyKu/bg_e1a85f/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a> -->
    <br>
        <!-- <footer class="footer text-faded text-center py-0"> -->
      <div class="container">
       <h4><p class="m-4 h6 nav-dark text-white">Copyright &copy; <b>Thinkcookcook</b>.<i>cloth</i> 2018</p></h4>
      </div>
    </footer>


 

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset ('user/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{asset ('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src='https://codepen.io/fbrz/pen/9a3e4ee2ef6dfd479ad33a2c85146fc1.js'></script>

  

    <script  src="{{asset ('user/js/index.js')"></script>
  </body>

</html>
    @include('tiny')
    @yield('scripts')