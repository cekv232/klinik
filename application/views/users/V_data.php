 
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
      <h4 class="navbar-brand ml-4">Halaman Users</h4>
      <form class="form-inline">
        <input class="form-cari mr-sm-2 " type="search" placeholder="Pencarian" aria-label="Search">
        <button class="btn  my-2 my-sm-0" id="btse" type="submit">cari</button>
      </form>
    </nav>



<!-- table ------------------------------------------------------------------------->

        <div class="container tble"> 

          <div class="hedr"></div>

            <a href="<?= base_url('users/tambah');?>" class="btn" id="bth">
              <span class="nav_name">Tambah Data</span>
            </a>


            <div class="table-responsive">
                 <table class="table text-center table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Username</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                       <?php $no=1; foreach ($users as $r){ ?>
                          <tr>
                            <td class="text-center"><?= $no; ?></td>
                            <td><?=  $r['username'];?></td>
                            <td><?=  $r['nama_lengkap'];?></td>
                            <td>
                                <a href="<?= base_url().'users/edit/'.$r['id'];?>" class="btn1 ">Edit</a>
                                <a href="<?= base_url().'users/hapus/'.$r['id'];?>" class="btn1" onCLick="return confirm('Yakin akan menghapus data')">Hapus</a>  
                            </td>
                          </tr>
                          <?php $no++; } ?>     
                  </tbody>
                </table>
            </div>
        </div> 
