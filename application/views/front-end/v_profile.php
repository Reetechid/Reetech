<main id="main" class="mt-5">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
          <div class="row gx-0">
              
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content card">
            <!-- <h3>Who We Are</h3> -->
            <p>
              <?= $setting->profile; ?>
            </p>
            <div class="text-center text-lg-start">
              <!--<a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">-->
              <!--  <span>Read More</span>-->
              <!--  <i class="bi bi-arrow-right"></i>-->
              <!--</a>-->
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>vendor/front-end/assets/img/about.png" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  <!-- ======= End About Section ======= -->

  <!-- ======= Vision and Mission Section ======= -->
  <section id="features" class="features" style="padding: 0px 0px !important;">

    <div class="container" data-aos="fade-up">
      <!-- Feature Tabs -->
      <div class="row feture-tabs" data-aos="fade-up" style="margin-top: 60px !important;">
        <div class="col-lg-6">
          <h3>Company Vision and Mission </h3>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
            <li>
              <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Vision</a>
            </li>
            <!--<li>-->
            <!--  <a class="nav-link" data-bs-toggle="pill" href="#tab2">Mission</a>-->
            <!--</li>-->
            <!-- <li>
              <a class="nav-link" data-bs-toggle="pill" href="#tab3">History</a>
            </li> -->
          </ul><!-- End Tabs -->

          <!-- Tab Content -->
          <div class="tab-content">

            <div class="card card-info tab-pane fade show active" id="tab1">
              <p class=""><?= $setting->visi; ?></p>
            </div><!-- End Tab 1 Content -->

            <div class="card card-success tab-pane fade show" id="tab2">
              <p class=""><?= $setting->misi; ?></p>
            </div><!-- End Tab 2 Content -->

            <!-- <div class="card card-warning tab-pane fade show" id="tab3">
              <p class=""><?= $setting->sejarah; ?></p>
            </div>End Tab 3 Content -->

          </div>

        </div>

        <div class="col-lg-6">
          <img src="<?= base_url(); ?>vendor/front-end/assets/img/features-2.png" class="img-fluid" alt="">
        </div>

      </div>
      <!-- End Feature Tabs -->

    </div>

  </section>
  <!-- End Vision and Mission Section -->


  <!-- ======= Team Section ======= -->
  <section id="team" class="team">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>MANAGEMENT</h2>
        <p>BOARD OF DIRECTORS</p>
        <!--<li data-filter=".filter-Web">Website Project</li>-->
        <!--<li data-filter=".filter-Mobile">Mobile Project</li>-->
      </header>
      <div class="row gy-4 d-flex justify-content-center">
        <?php foreach ($staff as $key => $value) :
          if ($value->publish == "Publish") : ?>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="<?= base_url('assets/img/staff/') . $value->gambar_staff; ?>" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4><?= $value->nama_staff; ?></h4>
                  <span><?= $value->nama_kategori; ?></span>
                  <!-- <p><?= $value->no_telepon; ?></p> -->
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

    </div>

  </section><!-- End Team Section -->


</main><!-- End #main -->