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
        <li><a href="#">Hasil Permohonan</a></li>
        <li><a href="#">Hasil Permohonan</a></li>
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
          <h2>Hasil Permohonan</h2>
        </div>

        <style type="text/css">
          .cek_kode{
            margin-top: 26px;
          }
        </style>

        <div class="clear btmspace-50">
          <h2><?php echo $hasil['jenis_permohonan'];?></h2>
          <div class="group btmspace-50 demo">
            <p><?php echo $hasil['keterangan'];?>, <a href="<?php echo base_url()  . "assets/upload/"; ?><?php echo $hasil['file_surat'];?>" target="_blank"> Lampiran File</a></p>
          </div>
        </div>

        <hr>
        <!-- ################################################################################################ -->


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