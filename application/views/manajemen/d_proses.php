<html lang="en">

	<head>
		<!---CSS---->	
		<link rel="stylesheet" href="<?php echo base_url('assets/css/manajemen.css')?>">
	</head>
	<body>
		<section id="content">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light" style="margin-top: 100px;">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav" style="margin:-18px; width: auto; font-weight: bold;">
						<a class="nav-link" href="<?php echo base_url() ?>manajemen/index">Data Buku</a>
						<a class="nav-link active" style="border-bottom: 2px solid #0C99E9;" href="#">Dalam Proses</a>
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
					</div>
					<div class="col mb-3">
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

				<table class="table table-bordered" id="table1">
					<thead>
						<tr class="text-center">
							<th scope="col">No</th>
							<th scope="col">Judul Buku</th>
							<th scope="col">Penulis</th>
							<th scope="col">Nama Penyewa</th>
							<th scope="col">No. Telepon</th>
							<th scope="col">Tanggal Pinjam</th>
							<th scope="col">Lama Pinjam</th>
							<th scope="col">Tenggat Pinjam</th>
							<th scope="col">Alamat</th>
                            <th scope="col">Opsi Pengiriman</th>
                            <th scope="col">Metode Bayar</th>
							<th scope="col">Total Sewa</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody style="font-size: 10px;">
						<?php $no=1; foreach ($dalam_proses as $db): ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $db['nama_buku'];?></td>
								<td><?= $db['penulis'];?></td>
								<td><?= $db['nama_penyewa'];?></td>
								<td><?= $db['no_telp'];?></td>
								<td><?= $db['tgl_pinjam'];?></td>
								<td><?= $db['lama_pinjam'];?></td>
								<td><?= $db['tgl_kembali'];?></td>
                                <td><?= $db['provinsi'].', '.$db['kota'].', '.$db['kecamatan'].', '
										.$db['kode_pos'].'<br>Nama Jalan/Gedung/Rumah: '
										.$db['nama_jln'].'<br>Patokan: '.$db['patokan'];?></td>
								<td><?= $db['opsi_pengiriman'];?></td>
								<td><?= $db['m_bayar'];?></td>
								<td><?= 'Rp. '.$db['total'];?></td>
								<td class="text-center">
									<a href="#"class="badge badge-danger float-center" style = "width : 90px; height : 30px; font-size : 12px; padding-top:8px" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Hapus</a>
									<br><br>
									<a href="#"class="badge badge-success float-center" style = "width : 90px; height : 30px; font-size : 12px; padding-top:8px" ?>Sudah dikirim</a>
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