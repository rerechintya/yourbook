<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!---CSS---->
  	<link rel="stylesheet" href="<?php echo base_url("assets/css/detail_buku.css")?>">

    <title>Your Book</title>
    <link rel="icon" href="img/Logo.png" type="image/icon type">
  </head>
  <body>
    <div class="container" style ="margin-top:70px; margin-bottom : 5px">
        <div class="row">
            <div class="col-sm-2" style="height:20px">
				<a class="nav-link btn btn-primary btn-sm tombol" href="<?php echo base_url('explore/search');?>"><dt>BACK</dt></a>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
        <?php $no=1; foreach ($data_buku as $db): ?>
            <div class="col-md-2">
              <div class="card rounded shadow border-0" style="width: 10rem;">
                  <img src="<?=base_url().'assets/img/'.$db['img'];?>" class="img-fluid rounded mx-3 mt-1">
                  <div class="card-body">
                      <p class="card-text"><small class="text-muted"><?= $db['penulis'];?></small></p>
                      <p class="card-text"><?= $db['nama_buku'];?></p>
                      <p class="card-text harga" style="color: #066aa3;"><?= $db['harga']; ?></p>
                  </div>
                  <a button type="button" class="btn btn-primary  mx-3 mb-3" href="" data-toggle="modal" data-target="#formSewa">Sewa Buku</button>
                  <a button type="button" class="btn btn-primary  mx-3 mb-3" style="background-color:#029d24" href="<?php echo site_url('explore/chat');?>">Chat</button></a>
              </div>
            </div>
            <div class="col-md ml-5" >
                <div class="card rounded shadow border-0 mb-2">
                  <div class="deskripsi m-3">
                    <h5>Deskripsi Buku</h5>
                    <p style="font-size: 14px; word-spacing: 2px;">
                    <?= $db['desk']; ?>
                    </p>
                  </div>
                </div>
                <div class="card rounded shadow border-0 mb-2">
                  <div class="detail_buku mx-3 mt-3">
                    <h5>Detail Buku</h5>
                    <div class="row">
                      <div class="col-sm">
                        <h6>Jumlah Halaman</h6>
                        <p>216</p>
                      </div>
                      <div class="col-sm">
                        <h6>Penerbit</h6>
                        <p>m&c</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm">
                        <h6>Tanggal Terbit</h6>
                        <p>27 Okt 2021</p>
                      </div>
                      <div class="col-sm">
                        <h6>Berat</h6>
                        <p>0.18 kg</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm">
                        <h6>ISBN</h6>
                        <p>9786230305719</p>
                      </div>
                      <div class="col-sm">
                        <h6>Lebar</h6>
                        <p>13 cm</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm">
                        <h6>Bahasa</h6>
                        <p>Indonesia</p>
                      </div>
                      <div class="col-sm">
                        <h6>Panjang</h6>
                        <p>19 cm</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card rounded shadow border-0 mb-2">
                  <div class="detail_buku mx-3 mt-3">
                    <h5>Review Pembeli</h5>
                    <div class="overflow-auto mb-3 bg-light" style="max-height: 400px;" >
                      <div class="row justify-content-center">
                        <div class="col-sm-11">
                          <div class="card rounded shadow border-0 mb-1 komentar">
                            <div class="yang_komen m-3">
                              <h6>Penyewa A</h6>
                              <p>"Mr. Spiro smiled another new kind of smile.
                                Tis rude of me to go out of the country but it's a favorite quote of mine that rings more true in the original French. It translates: Speech was given to man to disguise his thoughts." (PG. 63)</p>
                            </div>
                          </div>
                        </div>
                      </div>  
                      <div class="row justify-content-center">
                        <div class="col-sm-11">
                          <div class="card rounded shadow border-0 mb-1 komentar">
                            <div class="yang_komen m-3">
                              <h6>Penyewa B</h6>
                              <p>Was having too high of an expectation, menilik dari kesuksesannya. Or it's just isn't my taste. I guess both.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-center">
                        <div class="col-sm-11">
                          <div class="card rounded shadow border-0 mb-1 komentar">
                            <div class="yang_komen m-3">
                              <h6>Penyewa C</h6>
                              <p>Salah satu novel teenlit terbaik di tahun ini, namun bisa dibilang juga young adult karena ada gambaran kehidupan anak kuliahan. Mungkin 50-50 lah bisa dibilang, antara kehidupan kuliah dan sekolah porsinya seimbang dan bisa menyatu.</p>
                            </div>
                          </div>
                        </div>
                      </div>  
                      <div class="row justify-content-center">
                        <div class="col-sm-11">
                          <div class="card rounded shadow border-0 mb-1 komentar">
                            <div class="yang_komen m-3">
                              <h6>Penyewa D</h6>
                              <p>Bukunya ringan banget buat dibaca, alurnya ga belibet ‘pun konflik dan tata bahasanya. Menurut gue, flow alurnya itu enak ya, jadi betah lah bacanya</p>
                            </div>
                          </div>
                        </div>
                      </div>  
                    </div>
                  </div>
                </div>
            </div>
            <?php endforeach ?> 
        </div>
    </div> 
    <!-- Modal Add Product-->
    <form action="explore/dalam_proses" method="post">
        <div class="modal fade" id="formSewa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Sewa Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Nama buku:</label>
                    <span aria-hidden="true" id="nama_buku" nama="nama_buku"><b><?= $data_buku['nama_buku']?></b></span>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Nama Penulis:</label>
                    <span aria-hidden="true" id="penulis" nama="penulis"><b><?= $data_buku['penulis']?></b></span>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                      <label>Nama Penyewa</label>
                      <input type="text" class="form-control" name="nama_penyewa" placeholder="Nama Penyewa" value="<?= set_value('nama_penyewa'); ?> " id="nama_penyewa">
                      <small class="form-text text-danger"><?= form_error('nama_penyewa') ?></small>
                  </div>
                  <div class="form-group col-md-6">
                      <label>No. Telepon</label>
                      <input type="text" class="form-control" name="no_telp" placeholder="No. Telepon" value="<?= set_value('no_telp'); ?> "
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                      <small class="form-text text-danger"><?= form_error('nama_penyewa') ?></small>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4">
                    <label>Tanggal Pinjam</label>
                    <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= set_value('tgl_pinjam'); ?> ">
                    <small class="form-text text-danger"><?= form_error('nama_penyewa') ?></small>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Lama Meminjam</label>
                      <select id="lama_pinjam" name="lama_pinjam" class="form-control" onchange="funcKembali()" value="<?= set_value('lama_pinjam'); ?> ">
                        <option selected="true" disabled="disabled" value="">-Select-</option>
                        <option value="3">3 Hari</option>
                        <option value="5">5 Hari</option>
                        <option value="7">1 Minggu</option>
                        <option value="14">2 Minggu</option>
                        <option value="30">1 Bulan</option>
                      </select>
                      <small class="form-text text-danger"><?= form_error('nama_penyewa') ?></small>
                  </div>
                  <div class="form-group col-md-4">
                  <label>Tenggat Meminjam</label>
                    <p class="form-control" id="tgl_kembali" name="tgl_kembali"</p>
                  </div>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                    <div class="row">
                      <div class="form-group col-md-3">
                        <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" value="<?= set_value('provinsi'); ?> ">
                        <small class="form-text text-danger"><?= form_error('nama_penyewa') ?></small>
                      </div>
                      <div class="form-group col-md-3">
                        <input type="text" class="form-control" name="kota" placeholder="Kota" value="<?= set_value('kota'); ?> ">
                        <small class="form-text text-danger"><?= form_error('nama_penyewa') ?></small>
                      </div>
                      <div class="form-group col-md-3">
                        <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?= set_value('kecamatan'); ?> ">
                        <small class="form-text text-danger"><?= form_error('nama_penyewa') ?></small>
                      </div>
                      <div class="form-group col-md-3">
                        <input type="text" class="form-control" name="kode_pos" placeholder="Kode pos" value="<?= set_value('kode_pos'); ?> "
                          oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                          <small class="form-text text-danger"><?= form_error('nama_penyewa') ?></small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="nama_jln" placeholder="Nama Jalan, Gedung, No.Rumah" value="<?= set_value('nama_jln'); ?> ">
                        <small class="form-text text-danger"><?= form_error('nama_penyewa') ?></small>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="patokan" placeholder="Detail Lain (cth: Blok / No. Unit, Patokan" value="<?= set_value('patokan'); ?> ">
                        <small class="form-text text-danger"><?= form_error('nama_penyewa') ?></small>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Opsi Pengiriman</label>
                      <select name="opsi_pengiriman" class="form-control" value="<?= set_value('opsi_pengiriman'); ?> ">
                          <option selected="true" disabled="disabled" value="">-Select-</option>
                          <option value="">JNT</option>
                          <option value="">JNE</option>
                          <option value="">Si Cepat</option>
                          <option value="">Anteraja</option>
                          <option value="">Ninja</option>
                        </div>
                      </select>
                      <small class="form-text text-danger"><?= form_error('nama_penyewa') ?></small>
                  </div>
                  <div class="form-group">
                    <label>Metode Pembayaran</label>
                      <div class="row">
                        <div class="form-group col-md-8">
                          <select name="m_bayar" class="form-control" value="<?= set_value('m_bayar'); ?> ">
                              <option selected="true" disabled="disabled" value="">-Select-</option>
                              <option value="">Transfer BCA</option>
                              <option value="">Transfer BNI</option>
                              <option value="">Transfer BRI</option>
                              <option value="">Transfer Mandiri</option>
                              <option value="">QRIS</option>
                          </select>
                          <small class="form-text text-danger"><?= form_error('nama_penyewa') ?></small>
                        </div>
                        <div class="form-group col-md-4 .ml-auto">
                          <button type="button" class="btn btn-primary Col-md-4" data-toggle="modal" href="#myModal2">Show QRIS</button>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-8">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <p>Subtotal Penyewaan Buku</p>
                          <p>Subtotal Pengiriman</p>
                          <h5>Total Pembayaran</h5>
                        </div>
                        <div class="form-group col-md-6">
                          <p id="harga_buku"><?= 'Rp. '. $data_buku['harga']?></p>
                          <p>Rp. 10.000</p>
                          <h5 name="total"><?= 'Rp. '.(int) $data_buku['harga'] + 10.000.'.000'?></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Sewa</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Product-->   

    <div class="modal fade" id="myModal2">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <img src="<?=base_url().'assets/img/qris.png'?>" width=420px>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <script>
      function funcKembali(){
        var lamaPinjam = document.getElementById("lama_pinjam");
        var tglPinjam = document.getElementById("tgl_pinjam").value;
        
        var select = lamaPinjam.selectedIndex;
        const tglKembali = new Date(tglPinjam);

        if (lamaPinjam.options[select] == lamaPinjam.options[1]){
          tglKembali.setDate(tglKembali.getDate() + 3)
        } else if (lamaPinjam.options[select] == lamaPinjam.options[2]){
          tglKembali.setDate(tglKembali.getDate() + 5)
        } else if (lamaPinjam.options[select] == lamaPinjam.options[3]){
          tglKembali.setDate(tglKembali.getDate() + 7)
        } else if (lamaPinjam.options[select] == lamaPinjam.options[4]){
          tglKembali.setDate(tglKembali.getDate() + 14)
        } else if (lamaPinjam.options[select] == lamaPinjam.options[5]){
          tglKembali.setDate(tglKembali.getDate() + 30)
        }

        var date = tglKembali.toLocaleDateString('ind', { weekday:"long", year:"numeric", month:"short", day:"numeric"})

        document.getElementById("tgl_kembali").innerHTML = date;
      } 
    <!----modall--->     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>