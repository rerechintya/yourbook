<html lang="en">

	<head>
		<title>Yourbook</title>
		<!---CSS---->	
		<link rel="stylesheet" href="<?php echo base_url('assets/css/manajemen.css')?>">
	</head>
	<body>
		<section id="content">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light" style="margin-top: 100px;">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav" style="margin:-18px; width: auto; font-weight: bold;">
						<a class="nav-link active" style="border-bottom: 2px solid #0C99E9;" href="">Data Buku</a>
						<a class="nav-link" href="<?php echo base_url() ?>Manajemen/d_proses">Dalam Proses</a>
						<a class="nav-link" href="#">Sedang di sewa</a>
						</div>
					</div>
				</nav>
				<?php if ($this->session->flashdata('sukses')): ?>
						<div class="alert alert-success alert-dismissible">
							<a class ="close" data-dismiss="alert" aria-label="close">&times;</a>
							<?php echo $this->session->flashdata('sukses'); ?>
						</div>
				<?php endif; ?>
				<div class="row justify-content-start" style="margin-top:90px;">				
					<div class="col">
						<a class ="btn btn-primary mb-3 active" role="button" style="color: white;" href="<?php echo base_url() ?>manajemen/tambah"><i class="fas fa-plus"></i> Tambah Buku</a>
						<i class="bi bi-plus-lg"></i></a> 
					</div>
					<div class="col">
						<form action="<?= base_url('Manajemen/caribuku')?>" method ="post">
							<div class="input-group">
								<input type="text" name="keyword" class="form-control" placeholder="Cari buku..." autocomplete="off" autofocus>
								<span class ="input-group-btn">
									<input class="btn btn-outline-primary" type="submit" name="submit" value="Cari">
								</span>
							</div>
						</form>
					</div>
				</div>
				<br><br>
				<table class="table table-bordered" id="table1">
					<thead>
						<tr class="text-center">
							<th scope="col">No</th>
							<th scope="col">Judul Buku</th>
							<th scope="col">Penulis</th>
							<th scope="col">Penerbit</th>
							<th scope="col">Deskripsi</th>
							<th scope="col">Kategori</th>
							<th scope="col">Tag</th>
							<th scope="col">Harga</th>
							<th scope="col">Gambar</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody style="font-size: 10px;">
						<?php $no=1; foreach ($data_buku as $db): ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $db['nama_buku'];?></td>
								<td><?= $db['penulis'];?></td>
								<td><?= $db['penerbit'];?></td>
								<td><?= $db['desk'];?></td>
								<td><?= $db['kategori'];?></td>
								<td><?= $db['tag'];?></td>
								<td><?= 'Rp. '.$db['harga'];?></td>
								<td><a href="<?=base_url().'assets/img/'.$db['img'];?>" target="_blank"><img src="<?=base_url().'assets/img/'.$db['img'];?>" width="100"></a></td>
								<td class="text-center">
									<a href="<?php echo base_url() ?>Manajemen/hapus/<?= $db['id'];?>"class="badge badge-danger float-center" style = "width : 80px; height : 30px; font-size : 12px; padding-top:8px" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Hapus</a>
									<br><br>
									<a href="<?php echo base_url() ?>Manajemen/edit/<?= $db['id'];?>"class="badge badge-success float-center" style = "width : 80px; height : 30px; font-size : 12px; padding-top:8px" ?>Edit</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</section>				
		<script>
			$(document).ready(function(){
				$('#tabel1').DataTable();
			});
		</script>
		<nav aria-label="page navigation">
			<ul class="pagination justify-content-center mt-5">
			  <li class="page-item disabled">
				<a class="page-link">Previous</a>
			  </li>
			  <li class="page-item active" aria-current="page">
				<a class="page-link" href="#">1</a>
			  </li>
			  <li class="page-item"><a class="page-link" href="#">2</a></li>
			  <li class="page-item"><a class="page-link" href="#">3</a></li>
			  <li class="page-item"><a class="page-link" href="#">4</a></li>
			  <li class="page-item"><a class="page-link" href="#">5</a></li>
			  <li class="page-item"><a class="page-link" href="#">6</a></li>
			  <li class="page-item"><a class="page-link" href="#">7</a></li>
			  <li class="page-item"><a class="page-link" href="#">8</a></li>
			  <li class="page-item"><a class="page-link" href="#">9</a></li>
			  <li class="page-item"><a class="page-link" href="#">10</a></li>
			  <li class="page-item">
				<a class="page-link" href="#">Next</a>
			  </li>
			</ul>
		</nav>
	</body>
</html>