<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-lg sticky-top sticky-lg-top">
    <div class="container">
      <a class="navbar-brand" href="/">Eltamamy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
       <ul class="navbar-nav">
       

          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }} "  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Profil') ? 'active' : '' }}"  href="/profil">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Kegiatan') ? 'active' : '' }}"   href="/about">Kegiatan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($active ==='Posts') ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Postingan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item {{ ($title === 'ALL POSTS') ? 'active' : '' }}"  href="/Blog">Blog</a></li>
              <li><a class="dropdown-item {{ ($title === 'Post Categories') ? 'active' : '' }}" href="/categories">Category</a></li>
            </ul>
            <li class="nav-item">
            <a class="nav-link {{ ($title === 'Kegiatan') ? 'active' : '' }}"   href="/about">Kontak</a>
          </li>
            </li>
            </ul>

          <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle  {{ ($active ==='Posts') ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome back, {{auth()->user()->name}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item {{ ($title === 'ALL POSTS') ? 'active' : '' }}"  href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"> </i>  My Dashboard</a></li>
                <li><hr class="dropdown-drivider"></li>
                <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"> </i> Logout</button>
                  </form>
                  
                </li>

                </ul>                
              </li>
                @else         
              <li class="nav-item">
                <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>LOGIN</a>
              </li>
              @endauth
            </ul>
          
      </div>
    </div>
  </nav>