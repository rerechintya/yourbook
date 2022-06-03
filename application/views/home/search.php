<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!---CSS---->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/Header_Navbar.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Filter.css')?>">

    <!---Font---->
		<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&family=Poppins:wght@200&display=swap" rel="stylesheet">
		
	<!---Icon--->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
	  integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    
    <title>YourBook</title>
    <link rel="icon" href="<?php echo base_url('assets/img/logo.png')?>" type="image/icon type">
</head>
<body>
    <header>
        <div class="p-5 text-center" style="margin-top: 40px;">
            <h3 class="mb-3">Search: Fiksi</h3>
        </div>
        <!-- Jumbotron -->
    </header>

    <!--Content-->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="kanan">
                <p class="libre line" style="font-weight:bold">Filter</p>
                <div class="form-group">
                    <select class="form form-control">
                        <option>genre</option>
                        <option>Humor</option>
                        <option>Romance</option>
                        <option>Horor</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form form-control">
                        <option>Tahun terbit</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                    </select>
                </div>
                <div class="form-group">
                    <p>Urutkan berdasarkan:</p>
                    <div class="container"></div>
                    <div class="form-check">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label class="form-check-label" for="exampleRadios1">Terbaru</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option3">
                            <label class="form-check-label" for="exampleRadios2">Terlama</label>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">A - Z</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option3">
                            <label class="form-check-label" for="exampleRadios2">Z - A</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <p class="libre line" style="font-weight:bold">Harga</p>
                    
                        <label class="harga-label">Minimum</label> 
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" placeholder="0">
                        </div>
                   
                   
                        <label class="harga-label">Maximum</label> 
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" placeholder="500.000">
                        </div>
                </div>    
                <div class="form-group">
                    <p class="libre line" style="font-weight:bold">Stok</p>
                    <div class="form-check">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label class="form-check-label" for="exampleRadios1">Semua</label>
                        </div>    
                    </div>
                    <div class="form-check">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option2">
                            <label class="form-check-label" for="exampleRadios1">Tersedia</label>
                        </div>
                    </div>
                </div>
                <div class ="form-group">
                    <div class ="btn-group form-group">
                        <a button class="btn btn-primary" type="submit">Terapkan</a>
                    </div>
                    <div class ="btn-group form-group">
                        <a button class="btn btn-outline-primary" type="submit">Cancel</a>
                    </div>
                </div> 
                </div>         
            </div>
            <div class="col-md-9">
                <div class="container">
                    <p class="libre" style="color: #646363;">Semua: <span style="color :#0C99E9">90 Buku</span></p>
                    <div class="row" style="margin-top: -50px;">
                        <?php no:1;foreach ($data_buku as $db): ?>
                            <div class="col-md-3">
                                <a class="card rounded shadow border-0" style="width: 11rem;" href="<?php echo site_url() ?>explore/detail/<?= $db['id'];?>">
                                        <img src="<?=base_url().'assets/img/'.$db['img'];?>"  class="img-fluid rounded">
                                        <div class="card-body">
                                            <p class="card-text"><small class="text-muted"><?= $db['penulis']?></small></p>
                                            <p class="card-text" style="color : black"><?= $db['nama_buku']?></p>
                                            <br>
                                            <p class="card-text harga"><?= $db['harga']?></p>
                                            <ul class="list-inline small bintang">
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item active">
                <span class="page-link">
                  1
                  <span class="sr-only">(current)</span>
                </span>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
        </nav>
    </div>
    <!--Content-->

    <!-- Optional JavaScript -->
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