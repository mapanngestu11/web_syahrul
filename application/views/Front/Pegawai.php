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
      <h6 class="heading">Pegawai</h6>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Pegawai</a></li>
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
        <p>Info Pegawai</p>
      </div>
      <style type="text/css">
        .foto_kegiatan{
          width: 348px !important ;
          height: 261px !important ; 
        }
      </style>
      <ul class="nospace group">
        <li class="one_third first">
          <article>
            <figure><a href="#"><img class="foto_kegiatan" src="<?php echo base_url() . "assets/upload/"; ?><?php echo $data_pegawai[0]['foto'];?>" alt=""></a>
            </figure>
            <div class="excerpt">
              <h6 class="heading"><?php echo $data_pegawai[0]['nip'];?></h6>
              <ul class="nospace meta">
                <li><i class="fas fa-user"></i> <a href="#"><?php echo $data_pegawai[0]['nama'];?></a></li>
              </ul>
              <p><?php echo $data_pegawai[0]['jabatan'];?></p>
            </div>
          </article>
        </li>
        <li class="one_third">
          <article>
            <figure><a href="#"><img class="foto_kegiatan" src="<?php echo base_url() . "assets/upload/"; ?><?php echo $data_pegawai[1]['foto'];?>" alt=""></a>
            </figure>
            <div class="excerpt">
              <h6 class="heading"><?php echo $data_pegawai[1]['nip'];?></h6>
              <ul class="nospace meta">
                <li><i class="fas fa-user"></i> <a href="#"><?php echo $data_pegawai[1]['nama'];?></a></li>
              </ul>
              <p><?php echo $data_pegawai[1]['jabatan'];?></p>
            </div>
          </article>
        </li>

        <?php if (@$data_pegawai[2] != Null) { ?>
         <li class="one_third">
           <article>
             <figure><a href="#"><img class="foto_kegiatan" src="<?php echo base_url() . "assets/upload/"; ?><?php echo $data_pegawai[2]['foto'];?>" alt=""></a>
             </figure>
             <div class="excerpt">
               <h6 class="heading"><?php echo $data_pegawai[2]['nip'];?></h6>
               <ul class="nospace meta">
                <li><i class="fas fa-user"></i> <a href="#"><?php echo $data_pegawai[2]['nama'];?></a></li>
              </ul>
              <p><?php echo $data_pegawai[2]['jabatan'];?></p>
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