 
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
                            <ion-icon name="medkit-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Kunjungan</span>
                        </a>

                        <div  class="nav__link collapses">
                            <ion-icon name="clipboard-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Laporan</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="<?= base_url('laporan/data_dokter'); ?>" class="collapse__sublink">Data Dokter</a><br>
                                <a href="<?= base_url('laporan/data_pasien'); ?>" class="collapse__sublink">Data Pasien</a><br>
                               <a href="<?= base_url('laporan/data_kunjungan'); ?>" class="collapse__sublink">Data Kunjungan</a>
                            </ul>
                        </div>
                    </div>
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
      <h4 class="navbar-brand ml-4">Halaman Rekam Medis</h4>
      <form class="form-inline">
        <input class="form-cari mr-sm-2 " type="search" placeholder="Pencarian" aria-label="Search">
        <button class="btn  my-2 my-sm-0" id="btse" type="submit">cari</button>
      </form>
    </nav>



<!-- table ------------------------------------------------------------------------->

    <div class="container-fluid">

         <a href="<?= base_url('kunjungan');?>" class="btn" id="btkm">
              <span class="nav_name">Kembali</span>
          </a>

      <div class="row">
        <div class="col-md-6">
          <div class="card1 mt-5">
              <div class="hedr-bp"></div>
              <div class="bp-header"><h5>Biodata Pasien</h5></div>
              <div class="card-body">
                <div class="sien">  
                    <div class="row"> 
                        <div class="col-md-4"> 
                            <h6 class="sieh">Nama Pasien</h6>
                        </div>
                        <div class="col-md-4"> 
                            <h6 class="sieh">:</h6>
                        </div>
                        <div class="col-md-4"> 
                            <h6 class="sieh"><?= $d['nama_pasien'];?></h6>
                        </div>
                    </div>  
                </div><br>

                <div class="sien">  
                    <div class="row"> 
                        <div class="col-md-4"> 
                            <h6 class="sieh">Jenis Kelamin</h6>
                        </div>
                        <div class="col-md-4"> 
                            <h6 class="sieh">:</h6>
                        </div>
                        <div class="col-md-4"> 
                            <h6 class="sieh"><?= $d['jenis_kelamin'];?></h6>
                        </div>
                    </div>  
                </div><br>

                <div class="sien">  
                    <div class="row"> 
                        <div class="col-md-4"> 
                            <h6 class="sieh">Umur</h6>
                        </div>
                        <div class="col-md-4"> 
                            <h6 class="sieh">:</h6>
                        </div>
                        <div class="col-md-4"> 
                            <h6 class="sieh"><?= $d['umur'];?></h6>
                        </div>
                    </div>  
                </div>
              </div>

                <div class="row"> 
                    <div class="col-md-6"> 
                        <div class="bpf1"></div>
                    </div>  
                    <div class="col-md-6"> 
                        <div class="bpf2"></div>
                    </div>
                </div>  

          </div>  

            <div class="card2  mt-5">
              <div class="hedr-rm"></div>
                <div class="bp-header"><h5>Riwayat Pasien</h5></div>
              <div class="card-body">
               <table class="table table-sm table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tgl Berobat</th>
                      <th>Keluhan</th>
                      <th>Diagnosa</th>
                      <th>Penatalaksanaan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach($riwayat as $r){?>

                      <tr>
                         <td><?= $no;?></td>
                         <td><?= $r['tgl_berobat'];?></td>
                         <td><?= $r['keluhan_pasien'];?></td>
                         <td><?= $r['hasil_diagnosa'];?></td>
                         <td><?= $r['penatalaksanaan'];?></td>
                      </tr>
                    <?php $no++; } ?>
                  </tbody>
                </table>
              </div>

                <div class="row"> 
                    <div class="col-md-6"> 
                        <div class="bprm1"></div>
                    </div>  
                    <div class="col-md-6"> 
                        <div class="bprm2"></div>
                    </div>
                </div>  

          </div>  

        </div>

         <div class="col-md-6">
            <div class="card3 mt-5">
                <div class="hedr-rk"></div>
                <div class="bp-header"><h5>Catatan Rekam Medis</h5></div>
              <div class="card-body">
                  <form method="POST" action="<?= base_url();?>kunjungan/insert_rm">

                    <input type="hidden" name="id" value="<?= $d['id_berobat'] ;?>">

                      <div class="form-group">
                        <label for="">Keluhan</label>
                        <textarea name="keluhan" class="rk-form"><?= $d['keluhan_pasien'];?></textarea>
                      </div>

                       <div class="form-group">
                        <label for="">Diagnosa</label>
                        <textarea name="diagnosa" class="rk-form"><?= $d['hasil_diagnosa'];?></textarea>
                      </div>

                       <div class="form-group">
                        <label for="">Penatalaksanaan</label>
                        <select name="penatalaksanaan" id="" class="rk-form">
                          <option value="<?= $d['penatalaksanaan'];?>"><?= $d['penatalaksanaan'];?></option>
                          <option value="Rawat Jalan">Rawat Jalan</option>
                          <option value="Rawat Inap">Rawat Inap</option>
                          <option value="Rujuk"> Rujuk</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>
                      </div>

                      <button type="submit" class=" btn btn-sm text-white " id="btnrk">Simpan</button>
                  </form>
              </div>

                 <div class="row"> 
                    <div class="col-md-6"> 
                        <div class="rkrm1"></div>
                    </div>  
                    <div class="col-md-6"> 
                        <div class="rkrm2"></div>
                    </div>
                </div>  
          </div>  

            <div class="card  mt-5">
               <div class="hedr-cr"></div>
                <div class="bp-header"><h5>Catatan Rekam Medis</h5></div>
              <div class="card-body">
                  <form method="POST" action="<?= base_url('kunjungan/insert_resep');?>">

                    <input type="hidden" name="id" value="<?= $d['id_berobat'] ;?>">

                        <div class="row">
                            <div class="col-md-8">
                               <div class="form-group">
                                    <select name="obat" id="" class="obt">
                                      <?php foreach($obat as $r){?>

                                        <option value="<?= $r['id_obat'];?>"><?= $r['nama_obat'];?></option>

                                     <?php }?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn " id="btob">+</button>
                            </div>
                        </div>
      
                  </form>

               

                  <table class="table table-striped table-sm">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Obat</th>
                          <th>#</th>
                        </tr>
                      </thead>
                        <tbody>
                            <?php $no=1; foreach($resep as $r){?>
                              <tr>
                                  <td><?= $no;?></td>
                                  <td><?= $r['nama_obat'];?></td>
                                  <td>
                                      <a href="<?= base_url().'kunjungan/hapus_resep/'.$r['id_resep'].'/'.$r['id_berobat'];?>" class="text-danger">X</a>
                                  </td>
                              </tr>
                            <?php $no++;}?>
                        </tbody>
                  </table>

              </div>

                <div class="row"> 
                    <div class="col-md-6"> 
                        <div class="crrm1"></div>
                    </div>  
                    <div class="col-md-6"> 
                        <div class="crrm2"></div>
                    </div>
                </div>  

          </div><br> 

        </div>

      </div>
    </div>