<!-- ======= Portofolio Section ======= -->
<section id="portfolio" class="portfolio" style="margin-top:50px; min-height: 10vh; display: flex !important; justify-content: center !important;">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>REE TECH PRODUCT FREE</p>
      </header>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <!--<li data-filter="*" class="filter-active">All</li>-->
            <li data-filter=".filter-Text-Processing">Text Processing</li>
            <li data-filter=".filter-Computer-Vision">Computer Vision</li>
            <li data-filter=".filter-Audio Synthesis">Audio Synthesis</li>
            <li data-filter=".filter-Web 3 Dev">WEB 3 Dev </li>
          </ul>
        </div>
      </div>

      <div class="portfolio-container" data-aos="fade-up" data-aos-delay="200">
      
        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "Text Processing" && $value->status_portfolio == "Publish") : ?>
            <div class="portfolio-item col-lg-4 col-md-6 filter-Text-Processing" style="height: 300px !important; display: flex; justify-content: center; align-items: center;">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid shadow" alt="" style="width: 300px; height: 300px; object-fit: fill;">
                <div class="portfolio-info">
                  <h4><?= $value->judul_portfolio; ?></h4>
                  <p><?= $value->nama_layanan; ?></p>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "Computer Vision" && $value->status_portfolio == "Publish") : ?>
            <div class="portfolio-item col-lg-4 col-md-6 filter-Computer-Vision" style="height: 300px; display: flex; justify-content: center; align-items: center;">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid shadow" alt="" style="width: 300px; height: 300px; object-fit: fill;">
                <div class="portfolio-info">
                  <h4><?= $value->judul_portfolio; ?></h4>
                  <p><?= $value->nama_layanan; ?></p>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
              
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "Audio Synthesis" && $value->status_portfolio == "Publish") : ?>
            <div class="portfolio-item col-lg-4 col-md-6 filter-Audio Synthesis" style="height: 300px; display: flex; justify-content: center; align-items: center;">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid shadow" alt="" style="width: 300px; height: 300px; object-fit: fill;">
                <div class="portfolio-info">
                  <h4><?= $value->judul_portfolio; ?></h4>
                  <p><?= $value->nama_layanan; ?></p>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
              
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
        
        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "Web 3 Dev" && $value->status_portfolio == "Publish") : ?>
            <div class="portfolio-item col-lg-4 col-md-6 filter-Web 3 Dev" style="height: 300px; display: flex; justify-content: center; align-items: center;">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid shadow" alt="" style="width: 300px; height: 300px; object-fit: fill;">
                <div class="portfolio-info">
                  <h4><?= $value->judul_portfolio; ?></h4>
                  <p><?= $value->nama_layanan; ?></p>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
              
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

      </div>

    </div>

</section><!-- End Portfolio Section -->