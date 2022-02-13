<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="codepixer">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Job Listing</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('web/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/nice-select.css')}}">					
    <link rel="stylesheet" href="{{asset('web/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/main.css')}}">


    @yield('extra_css')
  </head>
  <body>

    <div class="loader"></div>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
  
          @include('website.include.navbar')
  
          {{-- @include('user.website.include.sidebar') --}}
        <!-- Main Content -->
          <div class="main-content">
                @yield('content')
          </div>  
  
          {{-- @include('user.include.setting-sidebar') --}}
        </div>
  
        @include('website.include.footer')
      </div>


    <script src="{{asset('web/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{asset('web/js/vendor/bootstrap.min.js')}}"></script>			
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{asset('web/js/easing.min.js')}}"></script>			
    <script src="{{asset('web/js/hoverIntent.js')}}"></script>
    <script src="{{asset('web/js/superfish.min.js')}}"></script>	
    <script src="{{asset('web/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('web/js/jquery.magnific-popup.min.js')}}"></script>	
    <script src="{{asset('web/js/owl.carousel.min.js')}}"></script>			
    <script src="{{asset('web/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('web/js/jquery.nice-select.min.js')}}"></script>			
    <script src="{{asset('web/js/parallax.min.js')}}"></script>		
    <script src="{{asset('web/js/mail-script.js')}}"></script>	
    <script src="{{asset('web/js/main.js')}}"></script>	
    @yield('extra_js')
  </body>
</html>
