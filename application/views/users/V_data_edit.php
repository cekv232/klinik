 
 <body id="body-pd">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <h5  class="nav__logo">KLINIK ALQIAY</h5>
                    </div>
                    <div class="nav__list">
                        <a href="<?php echo base_url()?>dashboard/index" class="nav__link active">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Beranda Klinik</span>
                        </a>

                       <div  class="nav__link collapses">
                            <ion-icon name="folder-open-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Master Data</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="<?= base_url('users'); ?>" class="collapse__sublink">Data Users</a><br>
                                <a href="<?= base_url('dokter'); ?>" class="collapse__sublink">Data Dokter</a><br>
                                <a href="<?= base_url('pasien'); ?>" class="collapse__sublink">Data Pasien</a><br>
                                <a href="<?= base_url('obat'); ?>" class="collapse__sublink">Data Obat</a>
                            </ul>
                        </div>

                         <a href="<?= base_url('Kunjungan');?>" class="nav__link">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Kunjungan</span>
                        </a>

                        <div  class="nav__link collapses">
                            <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Laporan</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="<?= base_url('laporan/data_dokter'); ?>" class="collapse__sublink">Data Dokter</a><br>
                                <a href="<?= base_url('laporan/data_pasien'); ?>" class="collapse__sublink">Data Pasien</a><br>
                                <a href="<?= base_url('laporan/data_kunjungan'); ?>" class="collapse__sublink">Data Obat</a>
                            </ul>
                        </div>

                       

                <a href="<?= base_url('auth/logout');?>" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>


<!-- ================================================CONTENT --================================================================>
<!=======================================================================================================================-->



<!-- navbar-------------------------------------------------------------------------->
     <nav class="navbar bar2 navbar-light ">
      <h4 class="navbar-brand ml-4">Tambah Data Users</h4>
      <form class="form-inline">
        <input class="form-cari mr-sm-2 " type="search" placeholder="Pencarian" aria-label="Search">
        <button class="btn  my-2 my-sm-0" id="btse" type="submit">cari</button>
      </form>
    </nav>



<!-- table ------------------------------------------------------------------------->

        <div class="container tble"> 

          <div class="hedr"></div>

            <a href="<?= base_url('users');?>" class="btn" id="bth">
              <span class="nav_name">Kembali</span>
            </a><br><br>

            <div class="form_tmbh">
              
              <form method="POST" action="<?= base_url('users/update');?>">

                <input type="hidden" name="id" value="<?= $r['id'];?>">

                <div class="form-group">
                  <label for= "" id="ups">Username</label>
                  <input type="text" name="username" value="<?= $r['username'];?>"  class="form-control">
                </div>

                <div class="form-group">
                  <label for= "" id="ups">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap"  value="<?= $r['nama_lengkap'];?>" class="form-control">
                </div>

                <div class="form-group">
                  <label for= "" id="ups">password</label>
                  <input type="password" name="password"  class="form-control" placeholder="Kosongkam jika tidak merubah password..">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn " id="btn">Simpan</button>
                </div>

               
              </form>

            </div>
           
        </div> 