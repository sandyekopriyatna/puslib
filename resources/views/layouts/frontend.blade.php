	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Website Repository Politeknik Pariwisata Batam</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/linearicons.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/font-awesome.min.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/bootstrap.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/magnific-popup.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/nice-select.css">							
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/animate.min.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/owl.carousel.css">			
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/jquery-ui.css">			
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/main.css">
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
		</head>
		<body>	
		  <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				<a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+62778 3540889</span></a>
			  				<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">info@btp.ac.id</span></a>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="/"><img src="{{asset('/frontend')}}/img/btpr.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			        	<li><a href="/">Beranda</a></li>
			        
			        <li><a href="/login">Login</a></li>
			         				          					          		          
			          
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			@yield('content')			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">

					<center><h4> <font color="white"> Copyright © 2022 Politeknik Pariwisata Batam. All Rights Reserved </h4></font></center>
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	


			<script src="{{asset('/frontend')}}/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('/frontend')}}/js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('/frontend')}}/js/easing.min.js"></script>			
			<script src="{{asset('/frontend')}}/js/hoverIntent.js"></script>
			<script src="{{asset('/frontend')}}/js/superfish.min.js"></script>	
			<script src="{{asset('/frontend')}}/js/jquery.ajaxchimp.min.js"></script>
			<script src="{{asset('/frontend')}}/js/jquery.magnific-popup.min.js"></script>	
    		<script src="{{asset('/frontend')}}/js/jquery.tabs.min.js"></script>						
			<script src="{{asset('/frontend')}}/js/jquery.nice-select.min.js"></script>	
			<script src="{{asset('/frontend')}}/js/owl.carousel.min.js"></script>									
			<script src="{{asset('/frontend')}}/js/mail-script.js"></script>	
			<script src="{{asset('/frontend')}}/js/main.js"></script>	
			
			<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
			@yield('after_scripts')
	@stack('after_scripts')
		</body>
	</html>