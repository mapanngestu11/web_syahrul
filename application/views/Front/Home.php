<!DOCTYPE html>
<html lang="">
<!-- head -->
<?php include 'Part/head.php';?>
<!-- end head -->
<body id="top">
  <!-- wrap -->
  <?php include 'Part/Topbar.php';?>

  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="one_half first">
        <h1>Kelurahan Karang Timur</h1>
      </div>
      <div class="one_half">
        <ul class="nospace clear">
          <li class="one_half first">
            <div class="block clear"><i class="fas fa-phone"></i> <span><strong class="block">No Telp:</strong> (021) 55764961</span> </div>
          </li>
          <li class="one_half">
            <div class="block clear"><i class="far fa-clock"></i> <span><strong class="block"> Senin. - Jumat.:</strong> 08.00 Pagi - 4 Sore</span> </div>
          </li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </header>

    <?php include 'Part/Navbar.php';?>

  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper bgded overlay" style="background-image:url('<?php echo base_url() . "assets/upload/"; ?><?php echo $data_banner[0]['gambar'];?>');">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article>
        <p>Kantor Kelurahan</p>
        <h3 class="heading">Karang Timur</h3>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>


  <div class="wrapper row2">
    <section id="latest" class="hoc container clear"> 
      <!-- ################################################################################################ -->
      <div class="sectiontitle">
        <h6 class="heading">Keluarahan Karang Timur</h6>
        <p>Et malesuada vitae risus in a enim in metus ultrices tristique</p>
      </div>
      <style type="text/css">
        .gambar_kegiatan{
          width: 348px !important ;
          height: 261px !important ; 
        }
      </style>
      <ul class="nospace group">
        <li class="one_third first">
          <article>
            <figure><a href="#"><img class="gambar_kegiatan" src="<?php echo base_url() . "assets/upload/"; ?><?php echo $data_kegiatan[0]['gambar'];?>" alt=""></a>
            </figure>
            <div class="excerpt">
              <h6 class="heading"><?php echo $data_kegiatan[0]['nama_kegiatan'];?></h6>
              <ul class="nospace meta">
                <li><i class="fas fa-user"></i> <a href="#"><?php echo $data_kegiatan[0]['nama_lengkap'];?></a></li>
              </ul>
              <p><?php echo $data_kegiatan[0]['isi_kegiatan'];?></p>
            </div>
          </article>
        </li>
        <li class="one_third">
          <article>
            <figure><a href="#"><img class="gambar_kegiatan" src="<?php echo base_url() . "assets/upload/"; ?><?php echo $data_kegiatan[1]['gambar'];?>" alt=""></a>
            </figure>
            <div class="excerpt">
              <h6 class="heading"><?php echo $data_kegiatan[1]['nama_kegiatan'];?></h6>
              <ul class="nospace meta">
                <li><i class="fas fa-user"></i> <a href="#"><?php echo $data_kegiatan[1]['nama_lengkap'];?></a></li>
              </ul>
              <p><?php echo $data_kegiatan[1]['isi_kegiatan'];?></p>
            </div>
          </article>
        </li>

        <?php if (@$data_kegiatan[2] != Null) { ?>
         <li class="one_third">
           <article>
             <figure><a href="#"><img class="gambar_kegiatan" src="<?php echo base_url() . "assets/upload/"; ?><?php echo $data_kegiatan[2]['gambar'];?>" alt=""></a>
             </figure>
             <div class="excerpt">
               <h6 class="heading"><?php echo $data_kegiatan[2]['nama_kegiatan'];?></h6>
               <ul class="nospace meta">
                <li><i class="fas fa-user"></i> <a href="#"><?php echo $data_kegiatan[2]['nama_lengkap'];?></a></li>
              </ul>
              <p><?php echo $data_kegiatan[2]['isi_kegiatan'];?></p>
            </div>
          </article>
        </li>
      <?php }else{ ?>
        <li class="one_third">

        </li>
      <?php }?>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper gradient">
  <section id="cta" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Informasi Kontrak</h6>
      <p>Kelurahan Karang Timur</p>
    </div>
    <ul class="nospace clear">
      <li class="one_third first">
        <div class="block clear"><i class="fas fa-phone"></i> <span><strong>Nomor Telp:</strong> +00 (123) 456 7890</span> </div>
      </li>
      <li class="one_third">
        <div class="block clear"><i class="fas fa-envelope"></i> <span><strong>Send us a mail:</strong> support@domain.com</span> </div>
      </li>
      <li class="one_third">
        <div class="block clear"><i class="fas fa-map-marker-alt"></i> <span><strong>Alamat:</strong> Klik Disini <a href="https://goo.gl/maps/6ahVhuEqnnEZb17Y7" target="_blank">Lokasi Kami</a></span> </div>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include 'Part/Footer.php';?>

</body>
</html>