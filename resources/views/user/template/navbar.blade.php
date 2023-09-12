 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
     <a href="index.html" class="navbar-brand">
         <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
     </a>
     <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
         <div class="navbar-nav mx-auto">
             <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
             <a href="" class="nav-item nav-link">About Us</a>
             <a href="" class="nav-item nav-link">Course</a>

             <a href="contact.html" class="nav-item nav-link">Contact Us</a>
         </div>
         {{-- login and logout --}}

         @if (Auth::check())
             <!-- Authentication -->

             <form method="POST" action="{{ route('logout') }}">
                 @csrf

                 <x-responsive-nav-link class="btn btn-primary ml-lg-3" :href="route('logout')"
                     onclick="event.preventDefault();
						 this.closest('form').submit();">
                     {{ __('Log Out') }} : 
                     {{Auth::user()->name}}
                 </x-responsive-nav-link>
             </form>
         @else
             <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
             {{-- </li> --}}
             {{-- <li class="nav-item"> --}}
             <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
         @endif

     </div>
 </nav>
 <!-- Navbar End -->
