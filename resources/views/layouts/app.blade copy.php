<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UMN TV Rayakan Semangat Muda mu</title>
	<link
      rel="icon"
      href="{{asset('/img/favicon.png')}}"
      type="image/png"
      sizes="16x16"
    />

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">

	<!-- Modal Custom CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('/css/modal.css')}}">

	<!--Bootstrap JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous"></script>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
	integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!--Montserrat Font-->
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

	<!--Font Awesome-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/2d31a0f03c.js" crossorigin="anonymous"></script>

	<!--Owl Carousel-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!--AOS Library-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	
	<style>
		.card {
			border-radius: 36px;
		}

		.watch-btn {
				background-color: #C73A26;
				color: white;
				border-radius: 20px;
		}

		.watch-btn:hover {
			color: white;
		}

		.modal-content {
			border-radius: 3rem;
		}
	</style>
</head>

<body class="body" style="background-image: url('{{ asset('/img/bg.jpg')}}'); background-attachment: fixed; background-size: cover;">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top sticky">
		<div class="container">
			<a class="navbar-brand mr-5" href="#"><img src="{{asset('/img/logoPutih.png')}}" alt="UMN TV LOGO" class="img-fluid" id="logo"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0 px-5">
					<li class="nav-item active">
						<a class="nav-link" href="/onair">TVONAIR 7.0</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item active ">
						<a class="nav-link " href="/programs">Programs</a>
					</li>
					<li class="nav-item active ">
						<a class="nav-link " href="/crews">Crews</a>
					</li>
					<li class="nav-item active ">
						<a class="nav-link " href="/about">About</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>
	
	@yield('content')
	

	<!-- Footer -->
	<footer class="text-lg-start ">
		<!-- Section: Links  -->
		<section class="">
			<div class="container text-md-start mt-5">
				<!-- Grid row -->
				<div class="row mt-3">
	
					<!-- Grid column -->
					<div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4 social-icons">
						<!-- Links -->
						<h6 class="text-uppercase fw-bold mb-4">
							Follow our Social Media
						</h6>
						<a class="facebook" href="https://www.facebook.com/officialumntv" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
						<a class="twitter" href="https://www.twitter.com/officialumntv" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
						<a class="instagram" href="https://www.instagram.com/officialumntv" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>
						<a class="tiktok" href="https://www.tiktok.com/@officialumntv?" target="_blank">
							<i class="fab fa-tiktok"></i>
						</a>
						<a class="linkedin" href="https://www.linkedin.com/company/umn-tv/" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
						<a class="spotify" href="https://open.spotify.com/user/ty1q5cz4j7ssxrr3newj2cwvo?si=d498e2e188184f70" target="_blank">
							<i class="fa fa-spotify"></i>
						</a>
					</div>
					<!-- Grid column -->
	
					
					
					<!-- Grid column -->
					<div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4 Contact">
						<!-- Content -->
						<h6 class="text-uppercase fw-bold mb-4">
							<i ></i>Contact Us
						</h6>
						<p>
							<a href="mailto:marketing.tv@umn.ac.id">marketing.tv@umn.ac.id</a><br>
								LINE: <a href="https://page.line.me/?accountId=umntv&openerPlatform=native&openerKey=home%3Arecommend" target="_blank">@umntv
							</a>
						</p><br>
						<h6 class="text-uppercase fw-bold mb-4">
							<i ></i>Address
						</h6>
						<p>
							Jl. Scientia Boulevard, Gading Serpong, Binong, Curug, Tangerang, Banten 15811
						</p>
					</div>
					<!-- Grid column -->
				</div>
				<!-- Grid column -->
			</div>
			<!-- Grid row -->
		
		</section>
		<!-- Section: Links  -->

		<!-- Copyright -->
		<div class=" p-4" style="background-color: rgba(0, 0, 0, 0.05);">
			<div class="container" style="display: flex;">
				<p >Copyright ©2021 | Managed by IT & Web Deptartement of UMN TV </p>
				<a style="text-align: right; margin-left: auto;" href="#">Back to Top</a>
			</div>
		
		</div>
		<!-- Copyright -->
	</footer>
	<!-- Footer -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            stagePadding: 50,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>