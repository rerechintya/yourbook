<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
	<link rel="icon" href="<?php echo base_url('assets/img/logo.png') ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- MY CSS -->

    <<link rel="stylesheet" href="<?php echo base_url('assets/css/navbar.css')?>">

    <title><?php echo $judul ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background: #0C99E9" >
        <div class="container">
			<a class="navbar-brand">
				<img src="<?php echo base_url('assets/img/logo.png') ?>" alt="" style="width:70px">
			</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo base_url('explore') ?>" style="color:black">Explore<span class="sr-only">(current)</a>
						</li>
						<li class="nav-item dropdown dropdown-hover position-static">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
							data-mdb-toggle="dropdown" aria-expanded="false" style="color: black;">Kategori</a>
							<!-- Dropdown menu -->
							<div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdownMenuLink" style="border-top-left-radius: 0;
									border-top-right-radius: 0;">
							<div class="container">
								<div class="row my-4">
								<div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
									<div class="list-group list-group-flush">
									<a href="" class="list-group-item list-group-item-action">Pertanian</a>
									<a href="" class="list-group-item list-group-item-action">Seni & Desain</a>
									<a href="" class="list-group-item list-group-item-action">Bisnis & Ekonomi</a>
									<a href="" class="list-group-item list-group-item-action">Komik</a>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
									<div class="list-group list-group-flush">
									<a href="" class="list-group-item list-group-item-action">Buku Masakan</a>
									<a href="" class="list-group-item list-group-item-action">Kamus</a>
									<a href="" class="list-group-item list-group-item-action">Pendidikan</a>
									<a href="" class="list-group-item list-group-item-action">Komputer & Teknologi</a>
									</div>
								</div>
								<div class="col-md-6 col-lg-3 mb-3 mb-md-0">
									<div class="list-group list-group-flush">
									<a href="" class="list-group-item list-group-item-action">Teknik</a>
									<a href="" class="list-group-item list-group-item-action">Fiksi & Sastra</a>
									<a href="" class="list-group-item list-group-item-action">Sejarah</a>
									<a href="" class="list-group-item list-group-item-action">Pengembangan Diri</a>
									</div>
								</div>
								<div class="col-md-6 col-lg-3">
									<div class="list-group list-group-flush">
									<a href="" class="list-group-item list-group-item-action">Romance</a>
									<a href="" class="list-group-item list-group-item-action">Travel</a>
									<a href="#fiksi" class="list-group-item list-group-item-action">Fiksi Populer</a>
									<a href="" class="list-group-item list-group-item-action">Ilmu pengetahuan sosial</a>
									</div>
								</div>
							</div>
						</li>
						<div class="col"> 
							<form action="<?php echo base_url('explore/search')?>" method ="post">
								<div class="input-group">
									<input name="keyword" class="form-control sm-4" type="text" placeholder="Search..."> 
									<span class="input-group-btn">
										<input class ="btn btn-primary" type="submit" name="submit" value="search">
									</span>
								</div>
							</form>
						</div>
						<div class="dropdown dropdown-hover">
							<button class=" btn btn-primary btn-md-4 dropdown-toggle" type="button"aria-haspopup="true"aria-expanded="false" data-toggle="dropdown" style="border-radius:50px; background-color:#0077BA;">
								<img src="<?php echo base_url('assets/img/girl.png') ?>" width = "20px" height = "20px" style="border-radius: 100px;" style="font-size : 12px"><?php echo $this->session->userdata("username");?>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Lihat Profile</a>
								<a class="dropdown-item" href="<?php echo base_url('Manajemen')?>">Manajemen Buku</a>
								<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?php echo site_url('Login/logout')?>">Log Out</a>
							</div>
						</div>

					</ul>
            </div>
        </div>
    </nav> 
	<script>
		function closeForm() {
			document.getElementById("myForm").style.display = "none";
		}
	</script>
</body>
</html>
