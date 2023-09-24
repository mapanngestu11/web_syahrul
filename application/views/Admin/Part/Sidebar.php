<?php if($this->session->userdata('hak_akses')==='admin' ):?> 
  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('Admin/Homepage/') ?>">
      <div class="sidebar-brand-icon">
        <!-- <img src="<?php echo base_url()."assets/Admin/"; ?>img/logo/logo2.png"> -->
      </div>
      <div class="sidebar-brand-text mx-3">Administrator</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url('Admin/Homepage/') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Tampilan Dashboard
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Admin/Banner/') ?>">
          <i class="fas fa-fw fa-images"></i>
          <span>Data Banner</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Admin/Kegiatan/') ?>">
          <i class="fas fa-fw fa-pen"></i>
          <span>Data Kegiatan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Admin/Pegawai/') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Pegawai</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Data Warga
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Admin/Warga/') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Warga</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Data Permohonan Surat
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
        aria-controls="collapseTable">
        <i class="fas fa-fw fa-envelope"></i>
        <span>Data Permohonan Surat</span>
      </a>
      <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Data Surat</h6>
          <a class="collapse-item" href="<?php echo base_url('Admin/Surat_pindah/') ?>">Surat Pindah</a>
          <a class="collapse-item" href="<?php echo base_url('Admin/Surat_kk_baru/') ?>">Surat KK Baru</a>
          <a class="collapse-item" href="<?php echo base_url('Admin/Surat_kk_perubahan/') ?>">Surat KK Perubahan</a>
        </div>
      </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Laporan
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true"
      aria-controls="collapseTable">
      <i class="fas fa-fw fa-folder"></i>
      <span>Cetak Laporan</span>
    </a>
    <div id="laporan" class="collapse" aria-labelledby="headingTable" data-parent="#laporan">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Cetak Laporan</h6>
        <a class="collapse-item" href="<?php echo base_url('Admin/Surat_pindah/laporan_surat') ?>">Surat Pindah</a>
        <a class="collapse-item" href="<?php echo base_url('Admin/Surat_kk_baru/laporan_surat') ?>">Surat KK Baru</a>
        <a class="collapse-item" href="<?php echo base_url('Admin/Surat_kk_perubahan/laporan_surat') ?>">Surat KK Perubahan</a>
      </div>
    </div>
  </li>

  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Pengaturan
  </div>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('Admin/User/') ?>">
      <i class="fas fa-fw fa-user"></i>
      <span>User Pengguna</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <div class="version" id="version-ruangadmin"></div>
</ul>
<?php elseif($this->session->userdata('hak_akses')==='lurah'):?> 
  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('Admin/Homepage/') ?>">
      <div class="sidebar-brand-icon">
        <!-- <img src="<?php echo base_url()."assets/Admin/"; ?>img/logo/logo2.png"> -->
      </div>
      <div class="sidebar-brand-text mx-3">Administrator</div>
    </a>
    
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Data Warga
    </div>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Admin/Warga/') ?>">
        <i class="fas fa-fw fa-users"></i>
        <span>Data Warga</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Data Permohonan Surat
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
      aria-controls="collapseTable">
      <i class="fas fa-fw fa-envelope"></i>
      <span>Data Permohonan Surat</span>
    </a>
    <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Surat</h6>
        <a class="collapse-item" href="<?php echo base_url('Admin/Surat_pindah/') ?>">Surat Pindah</a>
        <a class="collapse-item" href="<?php echo base_url('Admin/Surat_kk_baru/') ?>">Surat KK Baru</a>
        <a class="collapse-item" href="<?php echo base_url('Admin/Surat_kk_perubahan/') ?>">Surat KK Perubahan</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Laporan
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true"
    aria-controls="collapseTable">
    <i class="fas fa-fw fa-folder"></i>
    <span>Cetak Laporan</span>
  </a>
  <div id="laporan" class="collapse" aria-labelledby="headingTable" data-parent="#laporan">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Cetak Laporan</h6>
      <a class="collapse-item" href="<?php echo base_url('Admin/Surat_pindah/laporan_surat') ?>">Surat Pindah</a>
      <a class="collapse-item" href="<?php echo base_url('Admin/Surat_kk_baru/laporan_surat') ?>">Surat KK Baru</a>
      <a class="collapse-item" href="<?php echo base_url('Admin/Surat_kk_perubahan/laporan_surat') ?>">Surat KK Perubahan</a>
    </div>
  </div>
</li>

<hr class="sidebar-divider">
<div class="sidebar-heading">
  Pengaturan
</div>

<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('Admin/User/') ?>">
    <i class="fas fa-fw fa-user"></i>
    <span>User Pengguna</span>
  </a>
</li>
<hr class="sidebar-divider">
<div class="version" id="version-ruangadmin"></div>
</ul>
<?php endif;?>