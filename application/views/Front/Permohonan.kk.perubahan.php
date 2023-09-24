<!DOCTYPE html>

<html lang="">
<?php include 'Part/Head.php';?>
<body id="top">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <?php include 'Part/Topbar.php';?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <?php include 'Part/Header.php';?>
    <?php include 'Part/Navbar.php';?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- sweetalerts -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/Admin/"; ?>vendor/sweetalert2/sweetalert2.min.css">

  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <h6 class="heading">Home</h6>
      <ul>
        <li><a href="#">Pengajuan Surat</a></li>
        <li><a href="#">Permohonan KK Perubahan</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>

  <div class="wrapper row3">
    <main class="hoc container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content"> 
        <!-- ################################################################################################ -->
        <div class="clear btmspace-50">
          <h2>Permohonan KK Perubahan</h2>
        </div>

        <style type="text/css">
          .cek_kode{
            margin-top: 26px;
          }
        </style>

        <div class="clear btmspace-50">
          <h2>Cek Permohonan KK Perubahan</h2>
          <div class="group btmspace-50 demo">
            <form action="<?php echo base_url('Permohonan_kk_perubahan/cek_permohonan') ?>" method="POST">
              <div class="one_half first">
                <label>Kode Permohonan</label>
                <input type="text" name="kode_permohonan" class="form-control">
              </div>
              <div class="one_half">
                <button class="btn btn-primary cek_kode" type="submit">Cek Kode Permohonan</button>
              </div>
            </div>
          </form>

          <hr>
          <!-- ################################################################################################ -->
          <h2>Permohonan KK Perubahan</h2>

          <form action="<?php echo base_url('Permohonan_kk_perubahan/add') ?>" method="POST"  enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6">
               <div class="form-group">
                <label>Nik</label>
                <input type="text" name="nik" class="form-control" required="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
           <?php
                              $angka_acak = mt_rand(1, 999999); // Menghasilkan angka acak 6 digit antara 100000 dan 999999
                              ?>
                              <div class="col-sm-6">
                               <label for="gname">Kode Permohonan</label>
                               <input type="text" class="form-control" name="kode_permohonan" value="<?php echo $angka_acak;?>" readonly >

                             </div>
                             <div class="col-sm-6">
                              <label>Masukan File Permohonan</label>
                              <input type="file" name="file_pemohon" class="form-control">
                            </div>
                          </div>
                          <div class="row mt-4">
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label>Keperluan</label>
                                <textarea class="form-control" name="alasan"></textarea>
                              </div>
                            </div>

                          </div>
                          <button class="btn btn-primary" type="submit">Tambah Permohonan</button>
                        </form>
                        <div class="clear"></div>
                      </main>
                    </div>

                    <!-- sweetalerts -->
                    <script src="<?php echo base_url() . "assets/Admin/"; ?>js/main.js"></script>
                    <script src="<?php echo base_url() . "assets/Admin/"; ?>js/extensions/sweetalert2.js"></script>
                    <script src="<?php echo base_url() . "assets/Admin/"; ?>vendor/sweetalert2/sweetalert2.all.min.js"></script>
                    <?php if ($this->session->flashData('msg') == 'proses') : ?>
                      <script type="text/javascript">
                        Swal.fire({
                          type: 'warning',
                          title: 'Perhatian !',
                          heading: 'Success',
                          text: "Permohonan Masih Dalam Proses",
                          showHideTransition: 'slide',
                          icon: 'warning',
                          hideAfter: false,
                          bgColor: '#7EC857'
                        });
                      </script>

                      <?php elseif ($this->session->flashData('msg') == 'success') : ?>
                        <script type="text/javascript">
                          Swal.fire({
                            type: 'success',
                            title: 'Sukses',
                            heading: 'Success',
                            text: "Data Berhasil Di Tambahkan.",
                            showHideTransition: 'slide',
                            icon: 'success',
                            hideAfter: false,
                            bgColor: '#7EC857'
                          });
                        </script>
                        <?php elseif ($this->session->flashData('msg') == 'warning') : ?>
                          <script type="text/javascript">
                            Swal.fire({
                              type: 'warning',
                              title: 'Perhatian !',
                              heading: 'Warning',
                              text: "Format File salah, Data tidak terkirim.",
                              showHideTransition: 'slide',
                              icon: 'warning',
                              hideAfter: false,
                              bgColor: '#7EC857'
                            });
                          </script>
                          <?php elseif ($this->session->flashData('msg') == 'gagal') : ?>
                            <script type="text/javascript">
                              Swal.fire({
                                type: 'warning',
                                title: 'Perhatian !',
                                heading: 'Warning',
                                text: "Permohonan Gagal Anda Tidak Terdata / Belum Verif.",
                                showHideTransition: 'slide',
                                icon: 'warning',
                                hideAfter: false,
                                bgColor: '#7EC857'
                              });
                            </script>
                            <?php else : ?>

                            <?php endif; ?>

                            <?php include 'Part/Footer.php'?>
                          </body>
                          </html>