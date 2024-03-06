<header class="navbar navbar-dark sticky-top  bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Halaman Admin</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 bg-dark border-0"> Logout <span data-feather="log-out"></span></button>
      </form>
      
      </div>
    </div>
    
  </header>

  <!-- <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div> -->
            <!--logo start-->
            <!-- <a href="index.php" class="logo"><b></b> <small style="padding-left:5px;font-size:13px;"></small></a> -->
            <!--logo end-->
            <!-- <div class="nav notify-row" id="top_menu"> -->
                <!--  notification start -->
                   
                <!--  notification end -->
            <!-- </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" onclick="javascript: return confirm('Ingin Logout ?');" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header> -->