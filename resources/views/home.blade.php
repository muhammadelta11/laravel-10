   @extends('layouts.main')
      
   @section('container')

				<div class="bg-image p-3 justify-content-center align-items-center"
  style="
    background-image: url('/storage/bg.jpg') ;
    height: 100vh;
	/* widht: 100vh; */
	background-size: cover;
  "
>
					<div class="text-center mb-5 text-white" style="background-color: rgba(0, 0, 0, 0.6);">
						<div class="mask">
							<h1 class="mt-1 h1"><span>Masjid Nurul Ilmi</span> - Semarang</h1>
							<h3 class="mt-1 h3" data-wow-delay=".7s">   Jl. Dewi Sartika Bar. No.78, Sukorejo, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50221</h2>
							<div class="h2" data-wow-delay="1.5s"><a onClick="smoothScr.anim('services')" class="btn btn-border btn-lg"><i class="fa fa-spinner fa-spin"></i> Telusuri</a></div>
							
						</div>
					</div>
				</div>
			
		<!-- </section> -->
		<!-- End Intro Section -->

		<!-- Start Services Section -->
		<!-- <section id="services"> -->
			<!-- <div class="">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>Profil</span> Masjid</h1>
				<div class="row">
					<div class="col-sm-6 col-md-3 wow fadeInUp">
						<div class="service-box">
							<div class="content">
								<div class="icon-wrapper">
								<i class="fa fa-leaf"></i>
								</div>
								<h2>Nama Mesjid</h2>
								<p>Mesjid Fatimah Pekanbaru</p>
							</div>
						</div>
					</div> -->



					
					<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay=".2s" data-wow-offset="10">
						<div class="service-box">
							<div class="content">
								<div class="icon-wrapper">
								<i class="fa fa-heart"></i>
								</div>
								<h2>Alamat</h2>
								<p>Jalan Subayang, Tengkerang Barat, Marpoyan Damai, Pekanbaru, Riau 28125</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay=".4s" data-wow-offset="10">
						<div class="service-box">
							<div class="content">
								<div class="icon-wrapper">
								<i class="fa fa-child"></i>
								</div>
								<h2>Ready to Launch</h2>
								<p>Lorem ipsum is simply dummy text of the printin and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay=".6s" data-wow-offset="10">
						<div class="service-box">
							<div class="content">
								<div class="icon-wrapper">
								<i class="fa fa-mobile-phone"></i>
								</div>
								<h2>Liquid Responsive</h2>
								<p>Lorem ipsum is simply dummy text of the printin and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
						</div>
					</div>
		<!-- MAP-->
     @endsection
   