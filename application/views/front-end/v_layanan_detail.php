<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="<?= base_url('home'); ?>">Home</a></li>
        <li><?= $detail->judul_layanan; ?></li>
      </ol>
      <h2><?= $detail->judul_layanan; ?></h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8 vh-50">
          <div class="portfolio-details-slider swiper-container">
            <!--<div class="swiper-wrapper align-items-center">-->

              <div class="swiper-slide">
                <img src="<?= base_url('assets/img/layanan/') . $detail->gambar_layanan; ?>" alt="" style="scale: 75%;">
              </div>

              <!--<div class="swiper-slide">-->
              <!--  <img src="<?= base_url('assets/img/portfolio/') . $portfolio->gambar_portfolio; ?>" alt="">-->
              <!--</div>-->

              <!--<div class="swiper-slide">-->
              <!--  <img src="<?= base_url('assets/img/portfolio/') . $portfolio->gambar_portfolio; ?>" alt="">-->
              <!--</div>-->

            <!--</div>-->
            <!--<div class="swiper-pagination"></div>-->
          </div>
        </div>

        
        <div class="col-lg-4 vh-50">
          <div class="portfolio-info h-100">
            <h3>Model information</h3>
            <ul>
              <li><strong>Layanan</strong> : <?= $detail->judul_layanan; ?></li>
              <li><strong>Penyedia</strong> : <?= $setting->nama_perusahaan; ?></li>
              <!-- <li><strong>Model Created</strong> : <?= $date_project; ?></li> -->
              <li><strong>Contact</strong> : <a href="https://urlis.net/Reetech" target="_blank">Hubungi Sekarang</a></li>
              <!--<li><strong>Download Model</strong>: <a href="#"><?= $portfolio->website_portfolio; ?></a></li>-->
              <!-- <li><strong>How To Use</strong> : <?= $portfolio->testimoni; ?></li> -->
            </ul>
          </div>
        </div>

        <div class="portfolio-description card card-info">
          <h2>Detail Layanan</h2>
          <p>
            <?= $detail->isi_layanan; ?>
          </p>
        </div>



      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->