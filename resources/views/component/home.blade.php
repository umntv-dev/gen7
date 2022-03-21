@extends('layouts.app')

@section('content')

	

<div class="container-sm">
	<div class="row">
		<br><br>
	</div>
	
	<div class="row">
		<br><br>
	</div>
	<div class="row">
		<div style=" width: 100%;">
			<div style="width: 35vw; margin-bottom: 5vw; margin-left: auto; margin-right: auto; display: block;">
				<img data-aos="fade-up" src="{{asset('/img/TV_Retro.png')}}">
			</div>
			
		</div>
	</div>
	
	<div class="row">
		<div class="container">
			<div data-aos="fade-up" class="card blog-post hometv">
				<!---<div class="blog-post__img ">
					<img src=" " alt=" ">
				</div>-->
				<div class="owl-carousel owl-theme">
					<div class="item">
						<img src="{{asset('/img/programgen7/mersi.jpg')}}">
					</div>
					<div class="item">
						<img src="{{asset('/img/programgen7/kulik.jpg')}}">
					</div>
					<div class="item">
						<img src="{{asset('/img/programgen7/sanantara.jpg')}}">
					</div>
					<div class="item">
						<img src="{{asset('/img/programgen7/pepox.jpg')}}">
					</div>
					<div class="item">
						<img src="{{asset('/img/programgen7/karena.jpg')}}">
					</div>
					<div class="item">
						<img src="{{asset('/img/programgen7/lbs.png')}}">
					</div>
					<div class="item">
						<img src="{{asset('/img/programgen7/aad.png')}}">
					</div>
				</div>
				<div class="blog-post__info ">
					<div class="blog-post__date ">
						<!-- <span>Sunday</span>
							<span>October 27 2019</span> -->
					</div>
					<h1 class="blog-post__title ">Programs</h1>
					<p class="blog-post__text " style="color: black">Hai ultimates! UMN TV hadir dengan membawakan berbagai program dan konten yang tentunya menarik dan unik! Penasaran dengan program-program yang UMN TV tayangkan? Yuk klik tombol dibawah untuk berkenalan dengan program-programnya! 
					</p>
					<a href="/programs" class="blog-post__cta ">See all Programs</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<br><br><br>
	</div>
	
	<div class="row">
		<div class="container" data-aos="fade-up">
			<div class="text-center">
				<span class="yt">Come visit us at Youtube Channel UMN TV</span>
			</div>
			<!-- <h3 class="text-center">Come visit us at Youtube Channel UMN TV</h3> -->
			<div class="card" style="border-radius: 20px;">
				<img src="{{asset('/img/youtubeumntv.jpg')}}" class="card-img" alt="">
			</div>
			<br>
			<div class="text-center" style="padding: 10px;">
				<a class="btn watch-btn" style="padding: 10px;" href="https://www.youtube.com/channel/UC2I_6GJyyXHzVzuXvp9IsfA"> <i class="fa fa-youtube"></i> Visit Channel
				</a>
			</div>
		</div>
	</div>
	
	<div class="row">
		<br><br>
	</div>
	
	<div class="row">
		<br>
	</div>
	
	<div class="row">
		<div class="container">
			<div data-aos="fade-up" class="abouttv card blog-post">
				<div class="blog-post__info ">
					<h1 class="blog-post__title ">UMN TV Who?</h1>
					<p class="blog-post__text " style="color: white;">Diresmikan pada 31 Maret 2015, kegiatan yang dilakukan UMN TV meliputi dokumentasi event kampus, baik event yang diadakan oleh mahasiswa (himpunan atau UKM), hingga mengadakan workshop broadcasting untuk siswa-siswi SMA yang bekerja sama dengan tim marketing UMN. Selain itu, UMN TV juga melakukan produksi program-program unggulan yang disiarkan melalui streaming.
					</p>
					<a href="/about" class="blog-post__cta ">Read more</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<br><br>
	</div>
	
	<div class="row">
		<br>
	</div>
</div>



@stop