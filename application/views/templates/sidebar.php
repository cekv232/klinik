 
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
      <h4 class="navbar-brand ml-4" id="nas">SELAMAT DATANG DI KLINIK KAMI</h4>
      <form class="form-inline">
        <input class="form-cari mr-sm-2 " type="search" placeholder="Pencarian" aria-label="Search">
        <button class="btn  my-2 my-sm-0" id="btse" type="submit">cari</button>
      </form>
    </nav>

<!-- dasboard------------------------------------------------------------------------>
    
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-8">

            <div class="row">
                <div class="col-md-6">
                     <div class="img_lbr">
                          <img src="<?php echo base_url()?>assets/img/labor.jpg" width="300px" class="imsd">
                      </div>
                </div>

                <div class="col-md-6">
                     <div class="jdldeb">
                          <h4>Ayuk <span id="mls">Mulai</span> Hidup Sehat<br><br>Dari <span id="mls">Sekarang</span></h4>
                          <p>Kesehatan adalah renungan yang pertama dan tidur adalah syarat untuk mendapatkannya</p>
                      </div>
                </div>
            </div>

            <div class="pola pt-5">
                <h4>Pola Hidup Sehat</h4>
                <small>beberapa cara yang paling efektif untuk hidup sehat</small>

                <ul class="list-unstyled pt-5">
                  <li class="media">
                    <img src="https://img.icons8.com/color/40/000000/eating-person.png"/ class="mr-3" alt="...">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1 plme">Menjaga Makan</h5>
                     <p class="plpra">Isi setengah dari piring dengan sayuran yang tidak mengandung zat tepung. Sayuran tak mengandung zat tepung antara lain bayam dan sayuran berdaun hijau gelap lainnya seperti wortel, brokoli, dan kembang kol.</p>
                    </div>
                  </li>
                  <li class="media my-4">
                    <img src="https://img.icons8.com/officel/40/000000/under-pressure-male.png"/ class="mr-3" alt="...">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1 plme">Hindari Stress</h5>
                     <p class="plpra">Stres yang berlebihan dapat meningkatkan kadar kortisol dan sangat merusak metabolisme tubuh.</p>
                    </div>
                  </li>
                  <li class="media">
                    <img src="https://img.icons8.com/ultraviolet/40/000000/energy-drink.png"/ class="mr-3" alt="...">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1 plme">Minum Air Secukupnya</h5>
                      <p class="plpra">Jika ingin menjadi lebih sehat, coba untuk menghindari minuman manis. Minuman manis tidak mengandung nutrisi penting dan sarat dengan gula. Penelitian menunjukkan bahwa minuman yang dimaniskan dengan gula dapat meningkatkan risiko diabetes tipe 2, penyakit jantung, bahkan kanker.</p>
                    </div>
                  </li>
                </ul>

            </div>

        </div>
        <div class="col-md-4">
            <div class="img_lbr2 ">
                <div class="lbhe"></div>
                <img src="<?php echo base_url()?>assets/img/covid.jpg" width="230">
                    <div class="vihe">
                         <h4>Corona Virus</h4>
                         <p>Pakailah masker kemana pun anda pergi ikuti semua protokol kesehatan</p>

                         <h5>"jaga Jarak Aman"</h5>
                    </div> 
             </div>

             <div class="item">
                 <div class="row">
                     <div class="col-md-4">
                         <div class="itm1">
                             <div class="ithe1"></div>
                             <img src="https://img.icons8.com/flat_round/40/000000/protection-mask.png"/ class="imth1">
                             <h5 class="itjd1">Masker</h5>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="itm2">
                             <div class="ithe2"></div>
                            <img src="https://img.icons8.com/bubbles/40/000000/sanitizer.png"/ class="imth2">
                             <h5 class="itjd2">hand sanitizer</h5>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="itm3">
                             <div class="ithe3"></div>
                             <img src="https://img.icons8.com/doodle/40/000000/social-distancing.png"/ class="imth3">
                             <h5  class="itjd3">Jaga Jarak 1M</h5>
                         </div>
                     </div>
                 </div>
             </div>

        </div>
      </div>
    </div><br><br>


<!-- table ------------------------------------------------------------------------->
    