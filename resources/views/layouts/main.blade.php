<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/styleboo.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    
    <title>Web {{ $title }}</title>
  </head>
  <body>
    @include('partials.navbar')

      <div class="container mt-6">
       <div class="container-rm">
    
        @yield('container')
      </div>
    </div>
    <!-- Footer -->
<footer class="">
  <!-- Grid container -->
  <section class="bg-dark">
			<div class="container ">
				<div class="row">
					<h2 class="h1 text-center text-white" data-wow-delay=".2s">Kontak</h2>		
					<h3 class="h3 text-center text-white" data-wow-delay=".2s">Kontak Yang Dapat DiHubungi : </h3>
					<hr>
					<div class="text-white text-center">
						<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="fa-contact">
							
							</div>
						</div>
						<div class="text-center  text-white" data-wow-delay="0.2s">
							<div class="fa-contact">
								<a href="#"><i class="fa fa-phone"></i></a>
								<h5 class="text-center">Muhammad Aji Priyatna</h5>
								<h4 class="text-center">0811 7570 176</h4>
							</div>
						</div>
						<div class="text-center  text-white" data-wow-delay="0.2s">
							<div class="fa fa-contact">
								<a href="#"><i class="fa fa-user"></i></a>
								<h5 class="text-center">Email</h5>
								<h4 class="text-center">ajipriyatna@gmail.com</h4>
							</div>
						</div>
						<div class="text-center col-sm-6 col-md-3 text-white" data-wow-delay="0.2s">
							<div class="contact-item">
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

  <!-- Copyright -->
  <div class="copyright text-center text-center bg-success shadow-lg text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
  </body>
</html>