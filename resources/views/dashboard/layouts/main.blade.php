<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Website Laravel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    <!-- trik editor -->
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>
    
  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
    display:none;}
  </style>

</head>
  <body>
    
@include('dashboard.layouts.header')

<div class="container-fluid">
  <div class="row">
  @include('dashboard.layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     @yield('container')
       
      
    </main>
    <div class="container-fluid">
  <div class="row">
    @include('dashboard.layouts.footer')
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
      
  <!-- </body>
</html> -->

   
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>

	<script src="assets/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/datatables/dataTables.bootstrap.min.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
		//datatable
		$(function () {
			$("#example1").DataTable();
			$('#example2').DataTable();
		});
	</script>	
		
		<script type="text/javascript">
		//template
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Peringatan !',
            // (string | mandatory) the text inside the notification
            text: 'stok barang ada yang tersisa kurang dari 3 silahkan pesan lagi !',
            // (string | optional) the image to display on the left
            image: 'assets/img/seru.png',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
            
        });

        return false;
        });
		</script>
       
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "",
                    modal: true
                },
                legend: [  ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
        
        
        //angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
		$(document).ready(function(){setTimeout(function(){$(".alert-danger").fadeIn('slow');}, 500);});
		//angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
		setTimeout(function(){$(".alert-danger").fadeOut('slow');}, 5000);

		$(document).ready(function(){setTimeout(function(){$(".alert-success").fadeIn('slow');}, 500);});
		setTimeout(function(){$(".alert-success").fadeOut('slow');}, 5000);

		$(document).ready(function(){setTimeout(function(){$(".alert-warning").fadeIn('slow');}, 500);});
		setTimeout(function(){$(".alert-success").fadeOut('slow');}, 5000);
		
    </script>
		<script>
			$(".modal-create").hide();
			$(".bg-shadow").hide();
			$(".bg-shadow").hide();
			function clickModals(){
				$(".bg-shadow").fadeIn();
				$(".modal-create").fadeIn();
			}
			function cancelModals(){
				$('.modal-view').fadeIn();
				$(".modal-create").hide();
				$(".bg-shadow").hide();
			}
		</script>

  </body>
</html>
