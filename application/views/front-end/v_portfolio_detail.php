<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="<?= base_url('home'); ?>">Home</a></li>
        <li><?= $portfolio->judul_portfolio; ?></li>
      </ol>
      <h2><?= $portfolio->judul_portfolio; ?></h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper-container">
            <!--<div class="swiper-wrapper align-items-center">-->

              <div class="swiper-slide">
                <img src="<?= base_url('assets/img/portfolio/') . $portfolio->gambar_portfolio; ?>" alt="">
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

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Model information</h3>
            <ul>
              <li><strong>Category</strong> : <?= $portfolio->nama_layanan; ?></li>
              <?php
              $source = $portfolio->date_project;
              $date = new DateTime($source);
              $date_project = $date->format('d F, Y');
              ?>
              <li><strong>Model Created</strong> : <?= $date_project; ?></li>
              <li><strong>Download Model</strong> : <a href="<?= base_url('home/portfolioDownload/'. $portfolio->slug_portfolio);?>">Download Now</a></li>
              <!--<li><strong>Download Model</strong>: <a href="#"><?= $portfolio->website_portfolio; ?></a></li>-->
              <li><strong>How To Use</strong> : <?= $portfolio->testimoni; ?></li>
            </ul>
          </div>
        </div>
        <div class="portfolio-description card card-info">
          <h2>Model Detail </h2>
          <p>
            <?= $portfolio->isi_portfolio; ?>
          </p>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->