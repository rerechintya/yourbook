<!DOCTYPE html>
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
    <div class="modal fade" id="modalku">
        <div class="modal-dialog">
        <div class="modal-content">
        
            <!-- Ini adalah Bagian Header Modal -->
            <div class="modal-header">
            <h4 class="modal-title">Form Pemesanan</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Ini adalah Bagian Body Modal -->
            <div class="modal-body">
                <div class ="form-grup row pb-3" >
                    <label for="nama_buku" class="col-sm-3 col-form-label">Judul Buku</label>
                    <div class="col-xl">
                        <input type="text" name ="nama_buku" class="form-control" placeholder="Tuliskan judul buku" >
                    </div>
                </div>

                <div class ="form-group row" >
                    <label for="penulis" class="col-sm-3 col-form-label">Penulis</label>
                    <div class="col-xl">
                        <input type="text" name ="penulis" class="form-control " placeholder="Tuliskan nama penulis" >
                    </div>
                </div>

                <div class ="form-group row" >
                    <label for="penerbit" class="col-sm-3 col-form-label">Penerbit</label>
                    <div class="col-xl">
                        <input type="text" name ="penerbit" class="form-control " placeholder="Tuliskan nama penerbit"> 
                    </div>
                </div>

                <div class ="form-group row" >
                    <label for="desk" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-xl">
                        <textarea name="desk" class="form-control" row="10" placeholder="Deskripsi Buku">
                    </div>
                </div>
            </div>
            
            <!-- Ini adalah Bagian Footer Modal -->
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div>
    </div>
</body>