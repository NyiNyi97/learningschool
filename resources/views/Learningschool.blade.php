<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <link rel="icon" href="{{asset('asset/image/logo1.png')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="X -UA-Compatible" content="ie=edge">

  <title>Learning School </title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  

  <!-- Custom -->
  
  <link href="{{ asset('asset/bootstrap/css/customs.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/aos/dist/aos.css')}}">

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css1/font.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css1/style.css')}}">
  <link rel="stylesheet" type="text/css" href=" {{asset('asset/css1/media_query.css')}}">

  <!-- BOOTSTRAP CSS -->
  {{--  <link rel="stylesheet" type="text/css" href="{{asset('asset/css1/bootstrap.min.css')}}">  --}}  

  <!-- OWL CAROUSEL -->
  <link rel="stylesheet" type="text/css" href=" {{asset('asset/css1/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href=" {{asset('asset/css1/owl.theme.default.css')}}">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg  navbar-light fixed-top bg-light" >
    <div class="container-fluid">
      <a class="navbar-brand learn_size" href="{{route('mainpage')}}" >
        <img src="{{asset('asset/image/logo1.png')}}" class="img-fluid w-75 ml-4" alt=""></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto snip1198">
        <li class="nav-item">
          <a class="nav-link " href="{{route('mainpage')}}" id="home">Home
          </a>
        </li>
         <li class="nav-item dropdown " >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 22px; color: black;" >
         Courses
        </a>
        <div class="dropdown-menu fade-down" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item text-dark" href="{{route('grade1page')}} ">GRADE 1</a>
          <a class="dropdown-item text-dark" href="#">GRADE 2</a>
          <a class="dropdown-item text-dark" href="#">GRADE 3</a>
          <a class="dropdown-item text-dark" href="#">GRADE 4</a>
          <a class="dropdown-item text-dark" href="#">GRADE 5</a>
          <a class="dropdown-item text-dark" href="#">GRADE 6</a>
          <a class="dropdown-item text-dark" href="#">GRADE 7</a>
          <a class="dropdown-item text-dark" href="#">GRADE 8</a>
          <a class="dropdown-item text-dark" href="#">GRADE 9</a>
        </div>
      </li>
          
           <li class="nav-item ">
          <a class="nav-link" href="{{route('onlinecoursepage')}}" id="online">Online Courses
          </a>
        </li>
         <li class="nav-item ">
            <a class="nav-link" href="{{route('aboutuspage')}}"  id="contact">About</a>
          </li>
             <li class="nav-item ">
            <a class="nav-link" href="{{route('contactpage')}}"  id="contact">Contact</a>
          </li>
          @auth
            <li class="nav-item dropdown ">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 22px; color: black;">
                  {{ Auth::user()->name }}
                  </a>

                 <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown" >
                 <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();" style="font-size: 16px; color: black;">  Logout
                        </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                  </form>
              </div>
           </li>
           @else
            <li class="nav-item ">
            <a class="nav-link" href="{{route('signinpage')}}" id="signin">Sign in</a>
          </li>
          @endauth
        </ul>
      </div>
    </div> 
  </nav>
 <!-- Navigation end -->


  <!-- Page Content -->
  @yield('content')
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5" style="background: #001C2D  ">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Learning School </p>
    </div>
    <!-- /.container -->
  </footer>
 {{--   <button id="topBtn"><i class="fas fa-sort-up rounded-circle my-2"></i></button> --}}

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('asset/bootstrap/js/jquery.min.js')}}"></script>
  <script src="{{ asset('asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{ asset('asset/aos/dist/aos.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script type="text/javascript" src="{{asset('asset/js1/custom.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Owl Carousel -->
  <script type="text/javascript" src="{{asset('asset/js1/owl.carousel.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/parallax/parallax.min.js')}}"></script>
  {{-- <script >
    $(document).ready(function(){
      $("#topBtn").hide();
      $(window).scroll(function(){
        if($(this).scrollTop()>40) {
          $('#topBtn').fadeIn();

        }else{
          $('#topBtn').fadeOut();
        }
      });

      $("#topBtn").click(function(){
        $('html, body').animate({scrollTop:0},300);
      });
    });
  </script> --}}
{{--   
  <script>
      AOS.init({
        duration:2000,
        once: true,
      });
    </script> --}}
    <script type="text/javascript">
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length
      for(let i=0; i<menuLength; i++){
        if (menuItem[i].href === currentLocation) {
          menuItem[i].className = "active"
        }
      }
  </script>
  @yield('script')
</body>

</html>