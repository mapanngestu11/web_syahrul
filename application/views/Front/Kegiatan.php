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
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <h6 class="heading">Kegiatan</h6>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Kegiatan</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <section id="latest" class="hoc container clear"> 
      <!-- ################################################################################################ -->
      <div class="sectiontitle">
        <h6 class="heading">Keluarahan Karang Timur</h6>
        <p>Info Kegiatan</p>
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

<?php include 'Part/Footer.php';?>
</body>
</html>