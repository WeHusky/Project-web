<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <script src="https://unpkg.com/scrollreveal"></script>
  <title>Praktikum Web | Visit Jogja</title>
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/magnific-popup.css" rel="stylesheet" />
</head>

<body>
<header>
    <div class="main-nav">
      <div class="nav">
        <nav>
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#kategori">Category</a></li>
            <li><a href="#populer">Populer</a></li>
            <li><a href="#lodges">Lodges</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <section id="hero">
    <div class="container_hero">
      <div class="destination__container">
        <div class="socials">
          <span><i class="ri-twitter-fill"></i></span>
          <span><i class="ri-facebook-fill"></i></span>
          <span><i class="ri-instagram-line"></i></span>
          <span><i class="ri-youtube-fill"></i></span>
        </div>
        <div class="content">
          <h1>VISIT<br /><span>YOGYAKARTA</span></h1>
          <p>
            Yogyakarta adalah kota yang memiliki banyak destinasi wisata
            menarik. Dikenal sebagai pusat kebudayaan jawa, kota ini
            menawarkan keindahan alam seperti pantai, pegunungan, bukit, goa
            dan situs-situs sejarah seperti candi serta kawasan seni dan
            kerajinan
          </p>
          <a href="#lodges"><button class="btn">Scroll now</button></a>
        </div>
      </div>
    </div>
  </section>

  <section id="kategori">
    <!-- Projects -->
    <div id="projects" class="filter">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title"></div>
            <h2 class="section__header">Explore<br />Destinations</h2>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
        <div class="row">
          <div class="col-lg-12">
            <!-- Filter -->
            <div class="button-group filters-button-group">
              <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
              <a class="button" data-filter=".beach"><span>BEACH</span></a>
              <a class="button" data-filter=".historical"><span>HISTORICAL</span></a>
              <a class="button" data-filter=".city"><span>CITY</span></a>
              <a class="button" data-filter=".nature"><span>NATURE</span></a>
            </div>
            <!-- end of button group -->
            <div class="grid">
              <div class="element-item historical">
                <!-- logika kategori -->
                <a class="popup-with-move-anim" href="#project-1">
                  <div class="element-item-overlay">
                    <span>Candi Prambanan</span>
                  </div>
                  <img src="gambar/prambanan 2.jpg" alt="alternative" />
                </a>
              </div>
              <div class="element-item historical">
                <!-- logika kategori -->
                <a class="popup-with-move-anim" href="#project-2">
                  <div class="element-item-overlay">
                    <span>Keraton Yogyakarta</span>
                  </div>
                  <img src="gambar/keraton 1;1.jpg" alt="alternative" />
                </a>
              </div>
              <div class="element-item beach nature">
                <!-- logika kategori -->
                <a class="popup-with-move-anim" href="#project-3">
                  <div class="element-item-overlay">
                    <span>Pantai Indrayanti</span>
                  </div>
                  <img src="gambar/pantai indrayanti 2;2.jpg" alt="alternative" />
                </a>
              </div>
              <div class="element-item city historical">
                <!-- logika kategori -->
                <a class="popup-with-move-anim" href="#project-4">
                  <div class="element-item-overlay">
                    <span>Tamansari</span>
                  </div>
                  <img src="gambar/tamansari 1;1.jpg" alt="alternative" />
                </a>
              </div>
              <div class="element-item city historical">
                <!-- logika kategori -->
                <a class="popup-with-move-anim" href="#project-5">
                  <div class="element-item-overlay">
                    <span>Museum Senobudoyo</span>
                  </div>
                  <img src="gambar/senobudoyo 1;1.jpg" alt="alternative" />
                </a>
              </div>
              <div class="element-item nature">
                <!-- logika kategori -->
                <a class="popup-with-move-anim" href="#project-6">
                  <div class="element-item-overlay">
                    <span>Goa Pindul</span>
                  </div>
                  <img src="gambar/goa pindul 1;1.jpg" alt="alternative" />
                </a>
              </div>
              <div class="element-item beach nature">
                <!-- logika kategori -->
                <a class="popup-with-move-anim" href="#project-7">
                  <div class="element-item-overlay">
                    <span>Pantai Parangtritis</span>
                  </div>
                  <img src="gambar/parangtritis 1;1.jpg" alt="alternative" />
                </a>
              </div>
              <div class="element-item nature">
                <!-- logika kategori -->
                <a class="popup-with-move-anim" href="#project-8">
                  <div class="element-item-overlay">
                    <span>Sungai Mudal</span>
                  </div>
                  <img src="gambar/sungai mudal 1;1.jpg" alt="alternative" />
                </a>
              </div>

              <!-- Project Lightboxes -->
              <!-- Lightbox -->
              <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
                <div class="row">
                  <button title="Close (Esc)" type="button" class="mfp-close x-button"></button>
                  <div class="col-lg-8">
                    <img class="img-fluid" src="gambar/prambanan 1;1.jpg" alt="alternative" />
                  </div>
                  <!-- end of col -->
                  <div class="col-lg-4">
                    <h3>Candi Prambanan</h3>
                    <hr class="line-heading" />
                    <h6>Historical Site</h6>
                    <p>
                      Candi Prambanan adalah kompleks candi Hindu terbesar di
                      Indonesia yang dibangun pada abad ke-9 Masehi. Candi ini
                      dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu
                      Brahma, Wishnu, dan Siwa.
                    </p>
                    <p>
                      Jl. Raya Solo - Yogyakarta No.16, Kranggan, Bokoharjo, Kec.
                      Prambanan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571.
                    </p>
                    <div class="testimonial-container">
                      <p class="testimonial-text">
                        <b>Wisatawan lokal</b>: Usia 10 tahun ke atas: Rp 50.000
                        <br />
                        <b>Wisatawan mancanegara</b>: Usia di atas 10 tahun: 25 dollar
                        AS atau Rp 375.000 per orang.
                      </p>
                      <p class="testimonial-author">Kompas.com</p>
                    </div>
                    <a class="btn-solid-reg" href="#your-link">DETAILS</a>
                    <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
                  </div>
                  <!-- end of col -->
                </div>
                <!-- end of row -->
              </div>
              <!-- end of lightbox-basic -->
              <!-- end of lightbox -->

              <!-- Lightbox -->
              <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
                <div class="row">
                  <button title="Close (Esc)" type="button" class="mfp-close x-button"></button>
                  <div class="col-lg-8">
                    <img class="img-fluid" src="gambar/keraton 1;1.jpg" alt="alternative" />
                  </div>
                  <!-- end of col -->
                  <div class="col-lg-4">
                    <h3>Keraton Yogyakarta</h3>
                    <hr class="line-heading" />
                    <h6>Historical Site</h6>
                    <p>
                      Keraton Yogyakarta, atau Keraton Ngayogyakarta Hadiningrat,
                      adalah istana resmi Kesultanan Yogyakarta yang didirikan pada
                      tahun 1755 oleh Sultan Hamengkubuwono I.
                    </p>
                    <p>
                      Terletak di pusat kota Yogyakarta, keraton ini berfungsi
                      sebagai kediaman sultan, pusat kebudayaan Jawa, dan destinasi
                      wisata utama.
                    </p>
                    <div class="testimonial-container">
                      <p class="testimonial-text">
                        <b>Jam Operasional :</b> Senin - Minggu: 09.00 - 14.00 WIB
                        <br />
                        <b>Harga :</b>Rp 10.000 - 25.000 <b>Rating :</b> 4,6/5
                        (36,600 ulasan)
                      </p>
                      <p class="testimonial-author">Ipul Nigga</p>
                    </div>
                    <a class="btn-solid-reg" href="#your-link">DETAILS</a>
                    <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
                  </div>
                  <!-- end of col -->
                </div>
                <!-- end of row -->
              </div>
              <!-- end of lightbox-basic -->
              <!-- end of lightbox -->

              <!-- Lightbox -->
              <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
                <div class="row">
                  <button title="Close (Esc)" type="button" class="mfp-close x-button"></button>
                  <div class="col-lg-8">
                    <img class="img-fluid" src="gambar/pantai indrayanti 2;2.jpg" alt="alternative" />
                  </div>
                  <!-- end of col -->
                  <div class="col-lg-4">
                    <h3>Pantai Indrayanti</h3>
                    <hr class="line-heading" />
                    <h6>Beach</h6>
                    <p>
                      Pantai ini adalah bagian dari pesisir
                      Gunungkidul, Yogyakarta, yang pada awalnya tidak begitu dikenal secara luas.
                    </p>
                    <p>
                      Pantai Indrayanti pantai dengan pasir putih yang lembut, air laut yang jernih, dan tebingtebing
                      kapur yang menjulang, pantai ini menawarkan pemandangan alam yang memukau.
                    </p>
                    <div class="testimonial-container">
                      <p class="testimonial-text">
                        <b>Harga :</b> Rp. 10.000 per orang
                        <b>Rating :</b> 4,5/5 (36,600 ulasan)
                      </p>
                      <p class="testimonial-author">Kompas.com</p>
                    </div>
                    <a class="btn-solid-reg" href="#your-link">DETAILS</a>
                    <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
                  </div>
                  <!-- end of col -->
                </div>
                <!-- end of row -->
              </div>
              <!-- end of lightbox-basic -->
              <!-- end of lightbox -->

              <!-- Lightbox -->
              <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
                <div class="row">
                  <button title="Close (Esc)" type="button" class="mfp-close x-button">
                    ×
                  </button>
                  <div class="col-lg-8">
                    <img class="img-fluid" src="gambar/tamansari 1;1.jpg" alt="alternative" />
                  </div>
                  <!-- end of col -->
                  <div class="col-lg-4">
                    <h3>Taman Sari</h3>
                    <hr class="line-heading" />
                    <h6>Strategy Development</h6>
                    <p>
                      Tamansari dibangun pada masa Sultan Hamengkubowono 1 atau sekitar akhir abad XVII M.

                    </p>
                    <p>
                      Kampung Wisata Taman Sari adalah destinasi wisata bersejarah yang terletak di Yogyakarta,
                      Indonesia. Terkenal sebagai bekas kompleks istana Keraton Yogyakarta.
                    </p>
                    <div class="testimonial-container">
                      <p class="testimonial-text">
                        <b>Harga :</b> Rp. 10.000 per orang
                        <b>Rating :</b> 4,5/5 (36,600 ulasan)
                        <p class="testimonial-author">Google</p>
                      </p>
                      <a class="btn-solid-reg" href="#your-link">DETAILS</a>
                      <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
                    </div>
                    <!-- end of col -->
                  </div>
                  <!-- end of row -->
                </div>
                <!-- end of lightbox-basic -->
                <!-- end of lightbox -->

                <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
                  <div class="row">
                    <button title="Close (Esc)" type="button" class="mfp-close x-button"></button>
                    <div class="col-lg-8">
                      <img class="img-fluid" src="gambar/senobudoyo 1;1.jpg" alt="alternative" />
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-4">
                      <h3>Museum Senobudoyo</h3>
                      <hr class="line-heading" />
                      <h6>Historical Site
                      </h6>
                      <p>
                        Museum Negeri Sonobudoyo merupakan Unit Pelaksana Teknis Daerah pada Dinas Kebudayaan Provinsi
                        Daerah
                        Istimewa Yogyakarta
                      </p>
                      <p>
                        Sedangkan tugasnya adalah mengumpulkan, merawat, pengawetan, melaksanakan penelitian, serta
                        penyajian benda koleksi Museum Negeri Sonobudoyo.
                      </p>
                      <div class="testimonial-container">
                        <p class="testimonial-text">
                          <b>Harga :</b> Rp. 10.000 per orang
                          <b>Rating :</b> 4,5/5 (36,600 ulasan)
                          <p class="testimonial-author">Google</p>
                        </p>
                      </div>
                      <a class="btn-solid-reg" href="#your-link">DETAILS</a>
                      <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
                    </div>
                    <!-- end of col -->
                  </div>
                  <!-- end of row -->
                </div>
                <!-- end of lightbox-basic -->
                <!-- end of lightbox -->

                <!-- Lightbox -->
                <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
                  <div class="row">
                    <button title="Close (Esc)" type="button" class="mfp-close x-button">
                      ×
                    </button>
                    <div class="col-lg-8">
                      <img class="img-fluid" src="gambar/goa pindul 1;1.jpg" alt="alternative" />
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-4">
                      <h3>Goa Pindul</h3>
                      <hr class="line-heading" />
                      <h6>Cave</h6>
                      <p>
                        Secara geologis, gua ini terbentuk ribuan tahun yang
                        lalu akibat proses alami pengikisan batuan kapur oleh air sungai bawah tanah.
                      </p>
                      <p>
                        Goa Pindul menawarkan
                        pengalaman unik berpetualang di dalam air dengan menyusuri aliran sungai bawah tanah yang
                        mengalir
                        di dalam goa tersebut.
                      </p>
                      <div class="testimonial-container">
                        <b>Harga :</b> Rp. 45.000 per orang
                        <b>Rating :</b> 4,5/5 (36,600 ulasan)
                        <p class="testimonial-author">Google</p>
                      </div>
                      <a class="btn-solid-reg" href="#your-link">DETAILS</a>
                      <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
                    </div>
                    <!-- end of col -->
                  </div>
                  <!-- end of row -->
                </div>
                <!-- end of lightbox-basic -->
                <!-- end of lightbox -->

                <!-- Lightbox -->
                <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
                  <div class="row">
                    <button title="Close (Esc)" type="button" class="mfp-close x-button"></button>
                    <div class="col-lg-8">
                      <img class="img-fluid" src="gambar/parangtritis 1;1.jpg" alternative" />
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-4">
                      <h3>Pantai Parangtritis</h3>
                      <hr class="line-heading" />
                      <h6>Beach</h6>
                      <p>
                        Nama "Parangtritis" berasal dari bahasa Jawa, di mana "parang" berarti batu karang dan "tritis"
                        berarti tetesan air.
                      </p>
                      <p>
                        Pantai Parangtritis adalah salah satu pantai paling terkenal di Yogyakarta, terletak sekitar 27
                        km di selatan kota. Pantai ini menawarkan
                        berbagai aktivitas, berkuda, dan naik ATV, menjadikannya destinasi favorit
                        bagi wisatawan lokal dan mancanegara.s
                      </p>
                      <div class="testimonial-container">
                        <p class="testimonial-text">
                          <b>Harga :</b> Rp. 10.000 per orang
                          <b>Rating :</b> 4,5/5 (36,600 ulasan)
                        </p>
                        <p class="testimonial-author">Kompas.com</p>
                      </div>
                      <a class="btn-solid-reg" href="#your-link">DETAILS</a>
                      <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
                    </div>
                    <!-- end of col -->
                  </div>
                  <!-- end of row -->
                </div>
                <!-- end of lightbox-basic -->
                <!-- end of lightbox -->
                <!-- end of lightbox -->

                <!-- Lightbox -->
                <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
                  <div class="row">
                    <button title="Close (Esc)" type="button" class="mfp-close x-button">
                      ×
                    </button>
                    <div class="col-lg-8">
                      <img class="img-fluid" src="gambar/sungai mudal 1;1.jpg" alt="alternative" />
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-4">
                      <h3>Sungai Mudal</h3>
                      <hr class="line-heading" />
                      <h6>Nature</h6>
                      <p>
                        Sungai Mudal sebenarnya merupakan sebuah mata air yang memancar dari kedalaman gua. Air
                        yang keluar cukup banyak dan jernih.
                      </p>
                      <p>
                        Sebuah Ekowisata yang berlokasi di Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta,
                        Tepatnya di Pedukuhan Banyunganti dan Pedukuhan Gunungkelir, Kalurahan Jatimulyo, Kapanewon
                        Girimulyo.
                      </p>
                      <div class="testimonial-container">
                        <p class="testimonial-text">
                          <b>Harga :</b> Rp. 10.000 per orang
                          <b>Rating :</b> 4,5/5 (36,600 ulasan)
                        </p>
                        <p class="testimonial-author">Kompas.com</p>
                      </div>
                      <a class="btn-solid-reg" href="#your-link">DETAILS</a>
                      <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
                    </div>
                    <!-- end of col -->
                  </div>
                  <!-- end of row -->
                </div>
                <!-- end of lightbox -->
                <!-- end of project lightboxes -->
  </section>

  <section id="populer" class="projects__container" id="projects">
    <h2 class="section__header">Find Out Most Popular<br />Destination</h2>
    <div class="projects__grid">
      <div class="projects__card">
        <a class="popup-with-move-anim" href="#project-29"><img src="gambar/prambanan 4.jpg" alt="alternative" /></a>
        <h4>Candi Prambanan</h4>
        <p>Historical Site</p>
      </div>
      <div class="projects__card">
        <div class="element-item development">
          <a class="popup-with-move-anim" href="#project-30"><img src="gambar/tugu.jpg" alt="alternative" /></a>
        </div>
        <h4>Tugu Jogja</h4>
        <p>Historical Site</p>
      </div>
      <div class="projects__card">
        <div class="element-item development">
          <a class="popup-with-move-anim" href="#project-31"><img src="gambar/keraton 2.jpg" alt="alternative" /></a>
        </div>
        <h4>Keraton Yogyakarta</h4>
        <p>Historical Site</p>
      </div>
      <div class="projects__card">
        <div class="element-item development">
          <a class="popup-with-move-anim" href="#project-32"><img src="gambar/museum sonobudoyo.jpg"
              alt="alternative" /></a>
        </div>
        <h4>Museum Sonobudoyo</h4>
        <p>Historical Site</p>
      </div>
      <div class="projects__card">
        <div class="element-item development">
          <a class="popup-with-move-anim" href="#project-33"><img src="gambar/pantai indrayanti.jpg"
              alt="alternative" /></a>
        </div>
        <h4>Pantai Indrayanti</h4>
        <p>Beach</p>
      </div>
      <div class="projects__card">
        <div class="element-item development">
          <a class="popup-with-move-anim" href="#project-34"><img src="gambar/kampung wisata tamansari.jpg"
              alt="alternative" /></a>
        </div>
        <h4>Tamansari</h4>
        <p>Historical Site</p>
      </div>
      <div class="projects__card">
        <div class="element-item development">
          <a class="popup-with-move-anim" href="#project-35"><img src="gambar/goa pindul.jpg" alt="alternative" /></a>
        </div>
        <h4>Goa Pindul</h4>
        <p>Cave</p>
      </div>
      <div class="projects__card">
        <div class="element-item development">
          <a class="popup-with-move-anim" href="#project-36"><img src="gambar/malioboro.jpg" alt="alternative" /></a>
        </div>
        <h4>Malioboro</h4>
        <p>City</p>
      </div>
      <div class="projects__card">
        <div class="element-item development">
          <a class="popup-with-move-anim" href="#project-37"><img src="gambar/sungai mudal.jpg" alt="alternative" /></a>
        </div>
        <h4>Sungai Mundal</h4>
        <p>Nature</p>
      </div>

      <!-- Project Lightboxes -->
      <!-- Lightbox -->
      <div id="project-29" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button"></button>
          <div class="col-lg-8">
            <img class="img-fluid" src="gambar/prambanan 1;1.jpg" alt="alternative" />
          </div>
          <!-- end of col -->
          <div class="col-lg-4">
            <h3>Candi Prambanan</h3>
            <hr class="line-heading" />
            <h6>Historical Site</h6>
            <p>
              Candi Prambanan adalah kompleks candi Hindu terbesar di
              Indonesia yang dibangun pada abad ke-9 Masehi. Candi ini
              dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu
              Brahma, Wishnu, dan Siwa.
            </p>
            <p>
              Jl. Raya Solo - Yogyakarta No.16, Kranggan, Bokoharjo, Kec.
              Prambanan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571.
            </p>
            <div class="testimonial-container">
              <p class="testimonial-text">
                <b>Wisatawan lokal</b>: Usia 10 tahun ke atas: Rp 50.000
                <br />
                <b>Wisatawan mancanegara</b>: Usia di atas 10 tahun: 25
                dollar AS atau Rp 375.000 per orang.
              </p>
              <p class="testimonial-author">Kompas.com</p>
            </div>
            <a class="btn-solid-reg" href="#your-link">DETAILS</a>
            <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of lightbox-basic -->
      <!-- end of lightbox -->

      <!-- Lightbox -->
      <div id="project-30" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button"></button>
          <div class="col-lg-8">
            <img class="img-fluid" src="gambar/tugu 1;1.JPG" alt="alternative" />
          </div>
          <!-- end of col -->
          <div class="col-lg-4">
            <h3>Tugu Yogyakarta</h3>
            <hr class="line-heading" />
            <h6>Historical Sites</h6>
            <p>
              Tugu Yogya dibangun pada tahun 1755 oleh Sri Sultan Hamengku Buwono I, pendiri kraton Yogyakarta yang
              mempunyai nilai simbolis dan merupakan garis yang bersifat magis menghubungkan Laut Selatan, Kraton Yogya
              dan Gunung Merapi.
            </p>
            <p>
              Tugu Yogya bukanlah tugu sembarang, tapi tugu Yogya ini adalah tugu yang memiliki mitos yang sangat
              bersejarah dan sejuta misteri di dalamnya
            </p>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of lightbox-basic -->
      <!-- end of lightbox -->

      <!-- Lightbox -->
      <div id="project-31" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button"></button>
          <div class="col-lg-8">
            <img class="img-fluid" src="gambar/keraton 1;1.jpg" alt="alternative" />
          </div>
          <!-- end of col -->
          <div class="col-lg-4">
            <h3>Keraton Yogyakarta</h3>
            <hr class="line-heading" />
            <h6>Historical Site</h6>
            <p>
              Keraton Yogyakarta, atau Keraton Ngayogyakarta Hadiningrat,
              adalah istana resmi Kesultanan Yogyakarta yang didirikan pada
              tahun 1755 oleh Sultan Hamengkubuwono I.
            </p>
            <p>
              Terletak di pusat kota Yogyakarta, keraton ini berfungsi
              sebagai kediaman sultan, pusat kebudayaan Jawa, dan destinasi
              wisata utama.
            </p>
            <div class="testimonial-container">
              <p class="testimonial-text">
                <b>Jam Operasional :</b> Senin - Minggu: 09.00 - 14.00 WIB
                <br />
                <b>Harga :</b>Rp 10.000 - 25.000 <b>Rating :</b> 4,6/5
                (36,600 ulasan)
              </p>
              <p class="testimonial-author">General Manager</p>
            </div>
            <a class="btn-solid-reg" href="#your-link">DETAILS</a>
            <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of lightbox-basic -->
      <!-- end of lightbox -->

      <div id="project-32" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button"></button>
          <div class="col-lg-8">
            <img class="img-fluid" src="gambar/senobudoyo 1;1.jpg" alt="alternative" />
          </div>
          <!-- end of col -->
          <div class="col-lg-4">
            <h3>Museum Senobudoyo</h3>
            <hr class="line-heading" />
            <h6>Historical Site
            </h6>
            <p>
              Museum Negeri Sonobudoyo merupakan Unit Pelaksana Teknis Daerah pada Dinas Kebudayaan Provinsi Daerah
              Istimewa Yogyakarta
            </p>
            <p>
              Sedangkan tugasnya adalah mengumpulkan, merawat, pengawetan, melaksanakan penelitian, serta penyajian
              benda koleksi Museum Negeri Sonobudoyo.
            </p>
            <div class="testimonial-container">
              <p class="testimonial-text">
                <b>Harga :</b> Rp. 10.000 per orang
                <b>Rating :</b> 4,5/5 (36,600 ulasan)
                <p class="testimonial-author">Google</p>
              </p>
            </div>
            <a class="btn-solid-reg" href="#your-link">DETAILS</a>
            <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of lightbox-basic -->
      <!-- end of lightbox -->

      <!-- Lightbox -->
      <div id="project-33" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button"></button>
          <div class="col-lg-8">
            <img class="img-fluid" src="gambar/pantai indrayanti 2;2.jpg" alt="alternative" />
          </div>
          <!-- end of col -->
          <div class="col-lg-4">
            <h3>Pantai Indrayanti</h3>
            <hr class="line-heading" />
            <h6>Beach</h6>
            <p>
              Pantai ini adalah bagian dari pesisir
              Gunungkidul, Yogyakarta, yang pada awalnya tidak begitu dikenal secara luas.
            </p>
            <p>
              Pantai Indrayanti pantai dengan pasir putih yang lembut, air laut yang jernih, dan tebingtebing kapur yang
              menjulang, pantai ini menawarkan pemandangan alam yang memukau.
            </p>
            <div class="testimonial-container">
              <p class="testimonial-text">
                <b>Harga :</b> Rp. 10.000 per orang
                <b>Rating :</b> 4,5/5 (36,600 ulasan)
              </p>
              <p class="testimonial-author">Kompas.com</p>
            </div>
            <a class="btn-solid-reg" href="#your-link">DETAILS</a>
            <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of lightbox-basic -->
      <!-- end of lightbox -->
      <!-- end of lightbox -->

      <!-- Lightbox -->
      <div id="project-34" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button">
            ×
          </button>
          <div class="col-lg-8">
            <img class="img-fluid" src="gambar/tamansari 1;1.jpg" alt="alternative" />
          </div>
          <!-- end of col -->
          <div class="col-lg-4">
            <h3>Taman Sari</h3>
            <hr class="line-heading" />
            <h6>Historical Sites</h6>
            <p>
              Tamansari dibangun pada masa Sultan Hamengkubowono 1 atau sekitar akhir abad XVII M.

            </p>
            <p>
              Kampung Wisata Taman Sari adalah destinasi wisata bersejarah yang terletak di Yogyakarta,
              Indonesia. Terkenal sebagai bekas kompleks istana Keraton Yogyakarta.
            </p>
            <div class="testimonial-container">
              <b>Harga :</b> Rp. 10.000 per orang
              <b>Rating :</b> 4,5/5 (36,600 ulasan)
              <p class="testimonial-author">Google</p>
            </div>
            <a class="btn-solid-reg" href="#your-link">DETAILS</a>
            <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of lightbox-basic -->
      <!-- end of lightbox -->

      <!-- Lightbox -->
      <div id="project-35" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button">
            ×
          </button>
          <div class="col-lg-8">
            <img class="img-fluid" src="gambar/goa pindul 1;1.jpg" alt="alternative" />
          </div>
          <!-- end of col -->
          <div class="col-lg-4">
            <h3>Goa Pindul</h3>
            <hr class="line-heading" />
            <h6>Cave</h6>
            <p>
              Secara geologis, gua ini terbentuk ribuan tahun yang
              lalu akibat proses alami pengikisan batuan kapur oleh air sungai bawah tanah.
            </p>
            <p>
              Goa Pindul menawarkan
              pengalaman unik berpetualang di dalam air dengan menyusuri aliran sungai bawah tanah yang mengalir
              di dalam goa tersebut.
            </p>
            <div class="testimonial-container">
              <b>Harga :</b> Rp. 45.000 per orang
              <b>Rating :</b> 4,5/5 (36,600 ulasan)
              <p class="testimonial-author">Google</p>
            </div>
            <a class="btn-solid-reg" href="#your-link">DETAILS</a>
            <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of lightbox-basic -->
      <!-- end of lightbox -->

      <!-- Lightbox -->
      <div id="project-36" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button"></button>
          <div class="col-lg-8">
            <img class="img-fluid" src="gambar/malioboro 1;1 2.jpg" alt="alternative" />
          </div>
          <!-- end of col -->
          <div class="col-lg-4">
            <h3>Malioboro</h3>
            <hr class="line-heading" />
            <h6>Street City</h6>
            <p>
              Malioboro adalah jantung kota Yogyakarta yang terkenal dengan
              kehidupan malamnya yang ramai, toko-toko suvenir, dan kegiatan
              belanja yang tak henti.
            </p>
            <p>
              Jalan Malioboro yang ikonik ini dikelilingi oleh warung makan
              tradisional, toko-toko yang menjual barang-barang lokal
              seperti batik dan kerajinan tangan, serta berbagai tempat
              hiburan dan seni jalanan yang menghidupkan suasana.
            </p>
            <div class="testimonial-container">
              <p class="testimonial-text">
                <b>Jam Operasional :</b>Setiap hari <b>Harga :</b> Free
                (Gratis) <br />
                <b>Rating :</b> 4,7/5 (4,900 ulasan)
              </p>
            </div>
            <a class="btn-solid-reg" href="#your-link">DETAILS</a>
            <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of lightbox-basic -->
      <!-- end of lightbox -->
      <!-- Lightbox -->
      <div id="project-37" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button">
            ×
          </button>
          <div class="col-lg-8">
            <img class="img-fluid" src="gambar/sungai mudal 1;1.jpg" alt="alternative" />
          </div>
          <!-- end of col -->
          <div class="col-lg-4">
            <h3>Sungai Mudal</h3>
            <hr class="line-heading" />
            <h6>Nature</h6>
            <p>
              Sungai Mudal sebenarnya merupakan sebuah mata air yang memancar dari kedalaman gua. Air
              yang keluar cukup banyak dan jernih.
            </p>
            <p>
              Sebuah Ekowisata yang berlokasi di Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta,
              Tepatnya di Pedukuhan Banyunganti dan Pedukuhan Gunungkelir, Kalurahan Jatimulyo, Kapanewon
              Girimulyo.
            </p>
            <div class="testimonial-container">
              <p class="testimonial-text">
                <b>Harga :</b> Rp. 10.000 per orang
                <b>Rating :</b> 4,5/5 (36,600 ulasan)
              </p>
              <p class="testimonial-author">Kompas.com</p>
            </div>
            <a class="btn-solid-reg" href="#your-link">DETAILS</a>
            <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of lightbox -->
      <!-- end of row -->
    </div>
  </section>
  <section class="banner">
    <div class="section__container banner__container">
      <h2 class="section__header">
        What the Sultan Says About Yogya
      </h2>
      <div class="banner__content">
        <p>
          "Yogyakarta is not just a place, it's a living embodiment of culture, tolerance, and peace. It’s a city where
          tradition and modernity coexist harmoniously, creating a unique and vibrant atmosphere that welcomes everyone
          with open arms."
        </p>
        <h4>Sultan Hamengkubuwono X</h4>
        <h5>Governor of Yogyakarta</h5>
      </div>
    </div>
  </section>

  <section class="section__container blogs__container" id="lodges">
    <h2 class="section__header">Relax and Unwind at Yogyakarta's Finest Accommodations</h2>
    <div class="button-group">
      <button class="button active " data-filter=".Hotel">Hotel</button>
      <button class="button" data-filter=".Apartment">Apartment</button>
      <button class="button" data-filter=".Villa">Villa</button>
    </div>
    <div class="blogs__grid">
      <div class="blogs__card Hotel" onclick="window.location.href='mariiot_hotel.php'">
        <img src="gambar/hotel/mariiot 1;1.jpg" alt="blog" />
        <div class="blogs__content">
          <h5>Hotel</h5>
          <h4>Yogyakarta Marriott Hotel</h4>
          <div class="stars">
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
          </div>
          <br>
          <p>
            The Yogyakarta Marriott Hotel, conveniently situated on Jl. North Ring Road, boasts direct access to Pakuwon
            Mall Jogja, Yogyakarta's largest shopping hub. Its strategic location facilitates seamless exploration of
            renowned attractions such as Prambanan Temple, Borobudur Temple, Yogyakarta Palace, and the iconic Jalan
            Malioboro.
          </p>
          <br>
          <div class="rating">
            <span>9.6/10 <b class="user">(4.344)</b></span>
          </div>
        </div>
      </div>
      <div class="blogs__card Hotel">
        <img src="gambar/hotel/royal_ambarrukmo_yogyakarta_00.jpg" alt="blog" />
        <div class="blogs__content">
          <h5>Hotel</h5>
          <h4>Royal Ambarrukmo</h4>
          <div class="stars">
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
          </div>
          <br>
          <p>
            Royal Ambarrukmo Yogyakarta, once a royal residence, now stands as a magnificent hotel with grandeur
            designs and proximity to the Ambarrukmo Plaza.
          </p>
          <br>
          <div class="rating">
            <div class="rating">
              <span>9.0/10 <b class="user">(598)</b></span>
            </div>
          </div>
        </div>
      </div>
      <div class="blogs__card Hotel">
        <img src="gambar/hotel/phoenix-hotel.jpg" alt="blog" />
        <div class="blogs__content">
          <h5>Hotel</h5>
          <h4>The Phoenix Hotel</h4>
          <div class="stars">
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
          </div>
          <br>
          <p>
            Experience the perfect blend of modern amenities and historical charm at The Phoenix Hotel, located in the
            heart of Yogyakarta.
          </p>
          <br>
          <div class="rating">
            <div class="rating">
              <span>8.7/10 <b class="user">(666)</b></span>
            </div>
          </div>
        </div>
      </div>
      <div class="blogs__card Hotel">
        <img src="gambar/hotel/Hyatt-Regency-Yogyakarta-P031-Main-Photo.16x9.jpg" alt="blog" />
        <div class="blogs__content">
          <h5>Hotel</h5>
          <h4>Hyatt Regency</h4>
          <div class="stars">
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
          </div>
          <br>
          <p>
            Hyatt Regency Yogyakarta is set in the midst of a beautifully landscaped golf course, providing a serene
            escape with luxurious accommodations and excellent service.
          </p>
          <br>
          <div class="rating">
            <div class="rating">
              <span>9.7/10 <b class="user">(766)</b></span>
            </div>
          </div>
        </div>
      </div>
      <div class="blogs__card Hotel">
        <img src="gambar/hotel/sheraton.jpg" alt="blog" />
        <div class="blogs__content">
          <h5>Hotel</h5>
          <h4>Sheraton Mustika</h4>
          <div class="stars">
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
          </div>
          <br>
          <p>
            Sheraton Mustika Yogyakarta Resort and Spa offers a luxurious stay with a full-service spa, multiple
            dining options, and spacious rooms, all set against the backdrop of Mount Merapi.
          </p>
          <br>
          <div class="rating">
            <div class="rating">
              <span>9.4/10 <b class="user">(575)</b></span>
            </div>
          </div>
        </div>
      </div>
      <div class="blogs__card Hotel">
        <img src="gambar/hotel/hotel tentrem.jpg" alt="blog" />
        <div class="blogs__content">
          <h5>Hotel</h5>
          <h4>Tentrem Hotel</h4>
          <div class="stars">
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
            <img src="gambar/star.png" alt="star" class="star" />
          </div>
          <br>
          <p>
            Hotel Tentrem Yogyakarta, an independent hotel, prioritizes its future direction. Guided by a unique
            culture, it values individuality, considering every expression and aspiration as a means to enhance service.
            Whether for business or leisure, its luxurious suites, inspired interiors, state-of-the-art facilities, and
            thoughtful amenities promise an unforgettable experience of harmonious living.
          </p>
          <br>
          <div class="rating">
            <div class="rating">
              <span>9.6/10 <b class="user">(795)</b></span>
            </div>
          </div>
        </div>
      </div>
      <div class="blogs__card Apartment">
        <img src="gambar/student-castle.jpeg" alt="blog" />
        <div class="blogs__content">
          <h5>Apartment</h5>
          <h4>Student Castle</h4>
          <p>
            Student Castle Apartment HD is located in Depok.
            The hotel's location is very strategic because it is only 3.08 km from Adisutjipto International Airport
            (JOG).
            From Maguwo Station, this accommodation is only about 3.41 km.
            There are several interesting places nearby, such as Jenar Station which is around 44.98 km and Tugu
            Yogyakarta Station which is around 5.13 km.
          </p>
          <br>
          <div class="rating">
            <div class="rating">
              <span>8.0/10 <b class="user">(46)</b></span>
            </div>
          </div>
        </div>
      </div>
      <div class="blogs__card Apartment">
        <img src=gambar/lavender.jpg" alt="blog" />
        <div class="blogs__content">
          <h5>Apartment</h5>
          <h4>LavenderBnb Room</h4>
          <p>
            Located 6.4 km from Tugu Monument, Lavenderbnb Room 7 in Mataram City offers accommodation in Yogyakarta
            with access to an outdoor swimming pool, free WiFi and a 24-hour front desk. The accommodation has access to
            billiards at a pool table, ping pong and free private parking.
          </p>
          <br>
          <div class="rating">
            <div class="rating">
              <span>8.7/10 <b class="user">(26)</b></span>
            </div>
          </div>
        </div>
      </div>
      <div class="blogs__card Apartment">
        <img src="gambar/the yudhistira.jpg" alt="blog" />
        <div class="blogs__content">
          <h5>Apartment</h5>
          <h4>The Yudhistira Apartment</h4>
          <p>
            Featuring mountain views, MATARAM CITY YUDHISTIRA TOWER YOGYAKARTA Apartment offers accommodation with an
            outdoor swimming pool, a fitness center and a shared lounge, around 6.4 km from Tugu Monument. This
            apartment has a private swimming pool, garden, barbecue facilities, free WiFi and free private parking.
          </p>
          <br>
          <div class="rating">
            <div class="rating">
              <span>8.0/10 <b class="user">(66)</b></span>
            </div>
          </div>
        </div>
      </div>
      <div class="blogs__card Apartment">
        <img src="gambar/tamel.jpg" alt="blog" />
        <div class="blogs__content">
          <h5>Apartment</h5>
          <h4>Taman Melati Apartment</h4>
          <p>
            Taman Melati Apartment offers direct views of Mount Merapi, located only 7 km from Prambanan Temple.
            Facilities include an outdoor swimming pool, gym and BBQ area.
          </p>
          <br>
          <div class="rating">
            <div class="rating">
              <span>8.8/10 <b class="user">(62)</b></span>
            </div>
          </div>
        </div>
      </div>
      <div class="blogs__card Apartment">
        <img src="gambar/the  cabin.jpg" alt="blog" />
        <div class="blogs__content">
          <h5>Apartment</h5>
          <h4>The Cabin Apartment</h4>
          <p>
            The Cabin Apartment Uttara in Yogyakarta is located 5.5 km from Tugu Monument and offers air-conditioned
            accommodation with free WiFi and access to an outdoor swimming pool.
            There is a private bathroom complete with shower and free toiletries.
            Yogyakarta Tugu Station is 7.3 km from the apartment, while Malioboro Mall is 7.6 km away. The nearest
            airport is Adisutjipto Airport, 12 km from The Cabin Apartment Uttara.
          </p>
          <br>
          <div class="rating">
            <div class="rating">
              <span>7.0/10 <b class="user">(12)</b></span>
            </div>
          </div>
        </div>
      </div>
      <div class="blogs__card Apartment">
        <img src="gambar/greenlake.jpg" alt="blog" />
        <div class="blogs__content">
          <h5>Apartment</h5>
          <h4>Green Lake Apartment</h4>
          <p>
            Green Lake Apartment offers a calm and green environment on the outskirts of Yogyakarta, with swimming pool
            facilities, a large garden and access to an artificial lake. Ideal for families looking for tranquility.
          </p>
          <br>
          <div class="rating">
            <div class="rating">
              <span>7.0/10 <b class="user">(64)</b></span>
            </div>
          </div>
        </div>
      </div>
      <div class="blogs__card Villa">
        <div class="not-found">
          <p class="gak-ketemu">YOUR SEARCH WAS NOT FOUND, SORRY</p>
        </div>

      </div>
    </div>
  </section>

  </section>
  <footer class="footer" id="contact">
    <div class="section__container footer__container">
      <div class="footer__col">
        <h2>Azzam</h2>
        <p>124230127</p>
      </div>
      <div class="footer__col">
        <p>Kritik Saran</p>
        <form action="#">
          <input type="text" placeholder="Kritik Saran" />
          <button>Send</button>
        </form>
        <div class="footer__socials">
          <a href="#"><i class="ri-facebook-fill"></i></a>
          <a href="#"><i class="ri-twitter-fill"></i></a>
          <a href="#"><i class="ri-linkedin-fill"></i></a>
        </div>
      </div>
      <div class="footer__col">
        <h4>Our Services</h4>
        <a href="#hero">Home</a>
        <a href="manage_hotels.php">Manage Hotels</a>
        <a href="hotels.php">Reservasi Hotel</a>
        <a href="view_reservation.php">Tampilakn Reservasi</a>
        <a href="logout.php">Logout</a>
      </div>
    </div>
    <div class="footer__bar">
      Visit Yogyakarta
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const buttons = document.querySelectorAll('.button');
      const cards = document.querySelectorAll('.blogs__card');
      // Fungsi untuk mengatur tampilan kartu berdasarkan filter
      function filterCards(filter) {
        cards.forEach(card => {
          if (card.classList.contains(filter)) {
            card.style.display = 'block'; // Menampilkan kartu yang cocok
          } else {
            card.style.display = 'none'; // Menyembunyikan kartu yang tidak cocok
          }
        });
      }
      buttons.forEach(button => {
        button.addEventListener('click', function() {
          const filter = this.getAttribute('data-filter').substring(
            1); // Menghapus titik dari kelas untuk pencocokan
          // Menghapus kelas 'active' dari semua tombol dan menambahkannya ke tombol yang diklik
          buttons.forEach(btn => btn.classList.remove('active'));
          this.classList.add('active');
          // Memanggil fungsi filterCards dengan filter yang sesuai
          filterCards(filter);
        });
      });
      // Menetapkan tombol Hotel sebagai default dan memicu klik pada saat load
      const defaultButton = document.querySelector('.button[data-filter=".Hotel"]');
      defaultButton.classList.add('active');
      filterCards('Hotel'); // Memanggil fungsi untuk menampilkan hanya hotel
    });
  </script>

  <script src="ScrollReveal.js"></script>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="main.js"></script>

  <script src="js/jquery.min.js"></script>
  <!-- jQuery for Bootstrap's JavaScript plugins -->
  <s1cript src="js/popper.min.js"></s1cript>
  <!-- Popper tooltip library for Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Bootstrap framework -->
  <script src="js/jquery.easing.min.js"></script>
  <!-- jQuery Easing for smooth scrolling between anchors -->
  <script src="js/swiper.min.js"></script>
  <!-- Swiper for image and text sliders -->
  <script src="js/jquery.magnific-popup.js"></script>
  <!-- Magnific Popup for lightboxes -->
  <script src="js/morphext.min.js"></script>
  <!-- Morphtext rotating text in the header -->
  <script src="js/isotope.pkgd.min.js"></script>
  <!-- Isotope for filter -->
  <script src="js/validator.min.js"></script>
  <!-- Validator.js - Bootstrap plugin that validates forms -->
  <script src="js/scripts.js"></script>
  <!-- Custom scripts -->
</body>

</html>