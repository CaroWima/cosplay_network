<nav class="d-flex navbar sticky-top navbar-expand-md p-4">  
  <a class="navbar-brand" href="/">A Cosplay Network</a>
  <button class="navbar-toggler fas fa-bars" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
  </button>

  <div class="collapse navbar-collapse flex-row-reverse m-0" id="navbarSupportedContent">
    <ul class="navbar-nav  ml-0">
      <li class="nav-item">
        <a class="nav-link" href="/events" >
          <i class="fas fa-calendar"></i>
          Events
        </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="/blog">
        <i class="fas fa-scroll"></i>  
        Blog</a>
      </li>

      <li class="nav-item" >
        <a class="nav-link disabled" href="/personal-ads">
          <i class="fas fa-balance-scale"></i>
        Marketplace</a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link disabled">
        <i class="fas fa-info"></i>  
        About</a>
      </li>


      <li class="ml-4">
        @auth
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-primary ">
            <i class="fas fa-sign-out-alt"></i>
            </a>
          </div>
        @endauth
        @guest
          <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-outline-primary me-2">
            <i class="fas fa-sign-in-alt"></i>
            </a>
            <a href="{{ route('register.perform') }}" class="btn btn-outline-secondary">
            <i class="fas fa-user-plus"></i>
            </a>
          </div>
        @endguest
      </li>     
    </ul>
  </div>
</nav>
    
    
    

