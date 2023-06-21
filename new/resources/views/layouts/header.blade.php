<header id="header" class="fixed-top " style="background-color:#3b5733" >
  <div class="container d-flex align-items-center justify-content-lg-between"  >

  
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><img src="assets/img/signin_logo.png" width=40 height=40/></li>
              
              
                @if (Auth::check())
                  <li><li class="dropdown"><a href="#"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a class="nav-link scrollto" href="{{route('logout')}}" style="color:#c3c7c5 ">Logout</a></li>
                      
                      </ul></li>
                  </li>
                  
                @else
                  <li><li class="dropdown"><a href="#"><span>Authentication</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a class="nav-link scrollto" href="{{ route('register') }}" style="color:#c3c7c5 ">Sign Up</a></li>
                      <li><a class="nav-link scrollto" href="{{ route('login') }}" style="color:#c3c7c5 ">Sign In</a></li>
                    <li> <a class="nav-link scrollto" href="{{ route('adminlogin') }}" style="color:#c3c7c5 ">Admin</a></li>
                      </ul></li>
                  </li>
                    
                @endif
                
                
              <li><a class="nav-link scrollto" href="{{route('welcome')}}" style="color:#c3c7c5">Dashboard</a></li>
              <li><a class="nav-link scrollto" href="{{route('package')}}" style="color:#c3c7c5">Packages</a></li>
              <li><a class="nav-link scrollto " href="{{route('customized')}}" style="color:#c3c7c5">Customized trip</a></li>
              <li><a class="nav-link scrollto" href="{{route('reservations')}}" style="color:#c3c7c5">Reservations</a></li>
              <li><a class="nav-link scrollto" href="{{route('faq')}}"style="color:#c3c7c5">FAQ</a></li>
              <li><a class="nav-link scrollto" href="{{route('advertisement')}}"style="color:#c3c7c5">Advertisement</a></li>
              <li><a class="nav-link scrollto" href="{{route('explore')}}"style="color:#c3c7c5">Explore</a></li> 
              <li><a class="nav-link scrollto" href="{{route('terms')}}"style="color:#c3c7c5">Terms and Use</a></li> 
              <li><a class="nav-link scrollto" href="{{route('about')}}" style="color:#c3c7c5">About Us</a></li>
              <li><a class="nav-link scrollto" href="{{route('contact')}}" style="color:#c3c7c5">Contact</a></li>
              
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->