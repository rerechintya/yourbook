<div class="container mt-5 pt-3">
	
	<h1 style="font-size: 50px; font-style: bold;text-align : center">Form Data Buku</h1>
	
	<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $data_buku['id']; ?>">
	<input type="hidden" name="filelama" value="<?=$data_buku['img'];?>">
		<div class ="form-grup row pb-3" >
			<label for="nama_buku" class="col-sm-3 col-form-label">Judul Buku</label>
			<div class="col-xl">
				<input type="text" name ="nama_buku" class="form-control" value="<?= $data_buku['nama_buku'];?>" id="nama_buku">
				<small class="form-text text-danger"><?= form_error('nama_buku') ?></small>
			</div>
		</div>

		<div class ="form-group row" >
			<label for="penulis" class="col-sm-3 col-form-label">Penulis</label>
			<div class="col-xl">
				<input type="text" name ="penulis" class="form-control " value="<?= $data_buku['penulis'];?>" id="penulis">
				<small class="form-text text-danger"><?= form_error('penulis') ?></small>
			</div>
		</div>

		<div class ="form-group row" >
			<label for="penerbit" class="col-sm-3 col-form-label">Penerbit</label>
			<div class="col-xl">
				<input type="text" name="penerbit" class="form-control " value="<?= $data_buku['penerbit']; ?>" id="penerbit">
				<small class="form-text text-danger"><?= form_error('penerbit') ?></small>
			</div>
		</div>

		<div class ="form-group row" >
			<label for="desk" class="col-sm-3 col-form-label">Deskripsi</label>
			<div class="col-xl">
				<textarea name="desk" class="form-control" row="10" id="desk"><?= $data_buku['desk']; ?></textarea>
				<small class="form-text text-danger"><?= form_error('desk') ?></small>
			</div>
		</div>

		<div class ="form-group row" >
			<label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
			<div class="col-xl">
				<input type="text" name="kategori" class="form-control" value="<?= $data_buku['kategori']; ?>" id="kategori">
				<small class="form-text text-danger"><?= form_error('kategori') ?></small>
			</div>
		</div>

		<div class ="form-group row" >
			<label for="tag" class="col-sm-3 col-form-label">Tag</label>
			<div class="col-xl">
				<input type="text" name="tag" class="form-control" value="<?= $data_buku['tag']; ?>" id="tag">
				<small class="form-text text-danger"><?= form_error('tag') ?></small>
			</div>
		</div>

		<div class ="form-group row" >
			<label for="harga" class="col-sm-3 col-form-label">Harga Sewa</label>
			<div class="col-xl">
				<input type="text" name ="harga" class="form-control" value="<?= $data_buku['harga']; ?>" id="harga">
				<small class="form-text text-danger"><?= form_error('harga') ?></small>
			</div>
		</div>

		<div class ="form-group row" >
			<label for="img" class="col-sm-3 col-form-label">Gambar</label>
			
			<div class="col-xl">
				<img class="img-thumbnail" src="<?php echo base_url() ?>assets/img/<?php echo $data_buku['img']?>" style="width:100px; margin-bottom : 10px">
				<input type="file" name ="img" class="form-control-file" value="<?= $data_buku['img']; ?>" id="img">
			</div>
		</div>

		<div class="d-grid gap-4 d-md-flex justify-content-md-end" >
			<a href="<?=base_url();?>manajemen" class="btn btn-danger mr-2"onclick="return confirm('Apakah anda yakin membatalkan data ini?');" >Batal</a>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	<?php echo form_close(); ?>
</div>

<br><br>

<footer class="text-white pt-3 pb-1" style = "
                                            background-color: #0C99E9;  
                                            text-align: center;
                                            padding: 10px;
                                            font-family:'Libre Caslon Text', serif;
                                            font-size:14px; ">
	<p class="text-center" >© 2020 Yourbook, Inc.<p>
</footer>