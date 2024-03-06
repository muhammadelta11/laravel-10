<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
<h6 class="sidebar-heading d-flex justify-content-between aligen-items-center px-3 mt-4 mb-1 text-muted">
          <span>Admin</span>
        </h6>    
<div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard') ? 'active':'' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/post*') ? 'active':'' }}" href="/dashboard/post">
            <span data-feather="file-text"></span>
            My Posts
          </a>
        </li>
        
      @can("admin")
        <h6 class="sidebar-heading d-flex justify-content-between aligen-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/categories*') ? 'active':'' }}" href="/dashboard/categories">
            <span data-feather="grid"></span>
             Post Category
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="bar-chart-2"></span>
            Reports
          </a>
        </li>
        </ul>
        @endcan
        </div>
  </nav>