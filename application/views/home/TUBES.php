<html lang="en">

	<head>
		<title>Yourbook</title>
		<link rel="icon" href="<?php echo base_url('assets/img/logo.png') ?>">
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
			integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		
		<!---CSS---->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/navbar.css')?>">
		
		<!---Font---->
		<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&family=Poppins:wght@200&display=swap" rel="stylesheet">
		
		<!---Icon--->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
		  integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	<body id="explore">	
		<!---Slider--->
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="item1 active"></li>
			  <li data-target="#carouselExampleCaptions" data-slide-to="1" class="item2"></li>
			</ol>
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="<?php echo base_url('assets/img/slide.png') ?>" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block slider1">
				  <h1>Yourbook</h1>
				  <p>Kami menyediakan berbagai macam buku bekas, mulai dari buku pelajaran sampe buku
					bacaan seperti novel. Buku bekasnya bukan kaleng2 cui, kalian bisa melakukan 
					peminjaman buku dengan harga terjangkau</p>
				</div>
			  </div>
			  <div class="carousel-item">
				<img src="<?php echo base_url('assets/img/slide2.png') ?>" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
				  <h1 style="color:black; font-weight: bold; font-size: 40px">Yourbook Sedang Diskon</h1>
				  <p style="color:black; font-size: 15px">Tunggu apa lagi , yuk sewa buku di Yourbook!</p>
				</div>
			  </div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
		<!---Slider seles--->
		
		<!----content--->
		<section id="content">
			<div class="container">
				<div class="row text-center">
					<div class="col">
						<h4 style=" margin: auto; margin-top: 50px; width: 150px;">Best Seller</h4>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-2">
						<img src ="<?php echo base_url('assets/img/nvl1.jpg') ?>" alt="" width="150px">
					</div>
					<div class="col-2">
						<img src="<?php echo base_url('assets/img/nvl4.jpg') ?>" alt="" width="150px" height="220px">
					</div>
					<div class="col-2">
						<img src="<?php echo base_url('assets/img/nvl2.jpg') ?>" alt="" width="150px" height="220px">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-2">
						<img src ="<?php echo base_url('assets/img/nvl1.jpg') ?>" alt="" width="150px">
					</div>
					<div class="col-2">
						<img src="<?php echo base_url('assets/img/nvl4.jpg') ?>" alt="" width="150px" height="220px">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<h4 style="width: 170px;">Fiksi Populer</h4>
					</div>
				</div>
				<div class="row" id ="fiksi">
					<div class="col">
						<div class="card-deck">
							<div class="card">
								<img src="<?php echo base_url('assets/img/img8.png') ?>" width="170px" style="margin:auto;" >
								<div class="card-body">
									<p class="penulis">Ziggy Zezsyazeoviennazabrizkie</p>
									<h3 class="judul">Kita Pergi Hari Ini</h3>
								</div>
								<div class="card-footer">
									<p class="harga">Rp 50.000</p>
									<ul class="list-inline small">
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
									</ul>
								</div>
							</div>
							<div class="card">
								<img src="<?php echo base_url('assets/img/img7.png') ?>" width="170px" style="margin:auto">
								<div class="card-body">
									<p class="penulis">Vince Vawter</p>
									<h3 class="judul">Paperboy - Bocah Pengantar Koran</h3>
								</div>
								<div class="card-footer">
									<p class="harga">Rp 50.000</p>
									<ul class="list-inline small">
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
									</ul>
								</div>
							</div>
							<div class="card">
								<img src="<?php echo base_url('assets/img/img5.png') ?>" width="170px" style="margin:auto">
								<div class="card-body">
									<p class="penulis">Achi Tm</p>
									<h3 class="judul">Metropop: Oh, My Baby Blue</h3>
								</div>
								<div class="card-footer">
									<p class="harga">Rp 50.000</p>
									<ul class="list-inline small">
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
									</ul>
								</div>
							</div>
							<div class="card">
								<img src="<?php echo base_url('assets/img/img4.png') ?>" width="170px" style="margin:auto">
								<div class="card-body">
									<p class="penulis">Tere Liye</p>
									<h3 class="judul">Selena</h3>
								</div>
								<div class="card-footer">
									<p class="harga">Rp 50.000</p>
									<ul class="list-inline small">
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" id="it">
					<div class="col">
						<h4 style="width: 280px;">Komputer & Teknologi</h4>
				<div class="row">
					<div class="col">
						<div class="card-deck">
							<div class="card">
								<img src="<?php echo base_url('assets/img/img10.png') ?>" width="170px" style="margin:auto">
								<div class="card-body">
									<p class="penulis">Yudhy Wicaksono & Solusi Kantor</p>
									<h3 class="judul">Membuat Aplikasi Penggajian dengan...</h3>
								</div>
								<div class="card-footer">
										<p class="harga">Rp 50.000</p>
										<ul class="list-inline small">
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										</ul>
								</div>
							</div>
							<div class="card">
								<img src="<?php echo base_url('assets/img/img11.png') ?>" width="170px" height="258px" style="margin:auto">
								<div class="card-body">
									<p class="penulis">Basuki Rahmat; Budi Nugroho</p>
									<h3 class="judul">Pemrograman Deep Leraning Dengan...</h3>
								</div>
								<div class="card-footer">
										<p class="harga">Rp 50.000</p>
										<ul class="list-inline small">
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										</ul>
								</div>
							</div>
							<div class="card">
								<img src="<?php echo base_url('assets/img/img12.png') ?>" width="170px" style="margin:auto">
								<div class="card-body">
									<p class="penulis">Getut Pramesti,S.SI,...</p>
									<h3 class="judul">Mudah dan Menyenangkan...</h3>
								</div>
								<div class="card-footer">
										<p class="harga">Rp 50.000</p>
										<ul class="list-inline small">
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										</ul>
								</div>
							</div>
							<div class="card">
								<img src="<?php echo base_url('assets/img/img13.png') ?>" width="170px" style="margin:auto">
								<div class="card-body">
									<p class="penulis">Ir.Yuniar Supardi,Rahmat</p>
									<h3 class="judul">Semua Bisa Menjadi Pemrogrammer Web...</h3>
								</div>
								<div class="card-footer">
										<p class="harga">Rp 50.000</p>
										<ul class="list-inline small">
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" id="komik">
					<div class="col">
						<h4 style="width: 90px;">Komik</h4>
				<div class="row">
					<div class="col">
						<div class="card-deck">
							<div class="card">
								<img src="<?php echo base_url('assets/img/img15.png') ?>" width="170px" style="margin:auto">
								<div class="card-body">
									<p class="penulis">Takahashi Rumiko</p>
									<h3 class="judul">Mao 02</h3>
								</div>
								<div class="card-footer">
										<p class="harga">Rp 50.000</p>
										<ul class="list-inline small">
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										</ul>
								</div>
							</div>
							<div class="card">
								<img src="<?php echo base_url('assets/img/img16.png') ?>" width="170px" style="margin:auto">
								<div class="card-body">
									<p class="penulis">Taku Sakamoto</p>
									<h3 class="judul">Clean Freak! Aoyama Kun 12</h3>
								</div>
								<div class="card-footer">
										<p class="harga">Rp 50.000</p>
										<ul class="list-inline small">
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										</ul>
								</div>
							</div>
							<div class="card">
								<img src="<?php echo base_url('assets/img/img17.png') ?>" width="170px" height="258px" style="margin:auto">
								<div class="card-body">
									<p class="penulis">Peyo</p>
									<h3 class="judul">Smurf- Tamasya Para Smurf</h3>
								</div>
								<div class="card-footer">
										<p class="harga">Rp 50.000</p>
										<ul class="list-inline small">
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										</ul>
								</div>
							</div>
							<div class="card">
								<img src="<?php echo base_url('assets/img/img18.png') ?>" width="170px" style="margin:auto">
								<div class="card-body">
									<p class="penulis">Hiro Mashima</p>
									<h3 class="judul">Edens Zero 09</h3>
								</div>
								<div class="card-footer">
										<p class="harga">Rp 50.000</p>
										<ul class="list-inline small">
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
											<li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
										</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	    <!-- Optional JavaScript -->
		<script>
			$(document).ready(function(){
			// Activate Carousel
			$("#carouselExampleCaptions").carousel();
			  
			// Enable Carousel Indicators
			$(".item1").click(function(){
			  $("#carouselExampleCaptions").carousel(0);
			});
			$(".item2").click(function(){
			  $("#carouselExampleCaptions").carousel(1);
			});
			// Enable Carousel Controls
			$(".carousel-control-prev").click(function(){
			  $("#carouselExampleCaptions").carousel("prev");
			});
			$(".carousel-control-next").click(function(){
			  $("#carouselExampleCaptions").carousel("next");
			});
		});
		</script>
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
			integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
		</script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
			integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
		</script>
	</body>

</html>
