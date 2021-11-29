<nav class="d-flex navbar sticky-top navbar-expand-md p-4">  <a class="navbar-brand" href="/">Cosplay Network</a>
  <button class="navbar-toggler fas fa-bars" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
  </button>

  <div class="collapse navbar-collapse flex-row-reverse m-0" id="navbarSupportedContent">
    <ul class="navbar-nav  ml-0">
      <li class="nav-item">
        <a class="nav-link" href="/events" >
          Events
        </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="/blog">Blog</a>
      </li>

      <li class="nav-item" >
        <a class="nav-link disabled" href="/personal-ads">Personal Ads</a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link disabled">About</a>
      </li>


      <li>
        @auth
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-primary ">Logout</a>
          </div>
        @endauth
        @guest
          <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-outline-primary me-2">Login</a>
            <a href="{{ route('register.perform') }}" class="btn btn-outline-secondary">Sign-up</a>
          </div>
        @endguest
      </li>     
    </ul>
  </div>
</nav>
    
    
    

