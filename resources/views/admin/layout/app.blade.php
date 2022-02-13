<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>

       <!-- base:css -->
       <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
       <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
       <!-- endinject -->

          <!-- General CSS Files -->
      <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
      <!-- Template CSS -->
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

      <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
      <!-- Custom style CSS -->
      <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
      <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets/img/coffee.png')}}" />

{{-- Extra Css --}}
  @yield('extra_css')
</head>
<body>
    <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">

        @include('admin.include.navbar')

        @include('admin.include.sidebar')
      <!-- Main Content -->
        <div class="main-content">
              @yield('content')
        </div>  

        @include('admin.include.setting-sidebar')
      </div>

      @include('admin.include.footer')
    </div>
  </div>

  {{-- <!-- base:js -->
<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject --> --}}

{{-- <script src="{{asset('assets/jQuery.js')}}"></script> --}}

  <script src="{{asset('assets/js/scripts.js')}}"></script>
     <!-- General JS Scripts -->
  <script src="{{asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('assets/js/custom.js')}}"></script>

  {{-- Extra js --}}
  @yield('extra_js')
</body>
</html>