<header id="header" id="home">
  <div class="container">
    <div class="row align-items-center justify-content-between d-flex">
      <div id="logo">
        <a href="index.html"><img src="{{asset('main-logo.png')}}" class="rounded-circle" alt="" height="60" title="" /></a>
      </div>
      <div class="mr-3">
        <h1 class="text-white">SPOT</h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">About Us</a></li>
          <li><a href="category.html">Category</a></li>
          <li><a href="price.html">Price</a></li>
          <li><a href="blog-home.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li class="menu-has-children"><a href="">Pages</a>
            <ul>
        <li><a href="elements.html">elements</a></li>
        <li><a href="search.html">search</a></li>
        <li><a href="single.html">single</a></li>
            </ul>
          </li>
          <li><a class="ticker-btn" href="{{route('user.register')}}">Signup</a></li>
          <li><a class="ticker-btn" href="{{route('user.login')}}">Login</a></li>				          				          
        </ul>
      </nav><!-- #nav-menu-container -->		    		
    </div>
  </div>
</header><!-- #header -->