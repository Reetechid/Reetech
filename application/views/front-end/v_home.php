<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Power Up Your Productivity With Our Technology</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Artificial Intelligence, Blockchain and Internet of Things Service in Indonesia</h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="mailto:reetechcompany@gmail.com" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Start Collaboration Now</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?= base_url(); ?>vendor/front-end/assets/img/hero-img1.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<!-- ======= Portofolio Section ======= -->
<section id="portfolio" class="portfolio" style="display: flex !important; justify-content: center !important;">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>PRODUCT</h2>
        <p>REE TECH PRODUCT FREE</p>
      </header>

      <div class="row" data-aos="fade-up" data-aos-delay="200">
      
        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "Text Processing" && $value->status_portfolio == "Publish") : ?>
            <div class="box col-lg-4 col-md-6 shadow-sm filter-Text-Processing" style="height: 300px !important; display: flex; justify-content: center; align-items: center;">
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
            <div class="box col-lg-4 col-md-6 shadow-sm filter-Computer-Vision" style="height: 300px; display: flex; justify-content: center; align-items: center;">
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
            <div class="box col-lg-4 col-md-6 shadow-sm filter-Audio Synthesis" style="height: 300px; display: flex; justify-content: center; align-items: center;">
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
            <div class="box col-lg-4 col-md-6 shadow-sm filter-Web 3 Dev" style="height: 300px; display: flex; justify-content: center; align-items: center;">
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

      <div class="mt-5 d-flex justify-content-center align-items-center">
          <a href="<?= base_url().'home/portfolio'?>" class="">
              <p class="align-self-center">Read More
                <span class="align-self-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 30px; height: auto;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                  </svg>
                </span>
              </p>
             
            </a>
        </div>
    </div>

</section><!-- End Portfolio Section -->
  
<section id="values" class="values">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
        <h2>SUBSIDIARY COMPANY</h2> 
      <p>REE TECH STARTUP</p>
    </header>

    <div class="row">

      <div class="col-lg-4">
        <div class="box" data-aos="fade-up" data-aos-delay="200">
          <img src="<?= base_url(); ?>vendor
          /front-end/assets/img/values-1.png" class="img-fluid" alt="">
          <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
          <!-- <h3>Ambroise</h3> -->
          <p>Smart barbershop app and virtual hairstyles for your haircut solution!</p>
          <a href=''>Ambroise.id</a>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box" data-aos="fade-up" data-aos-delay="400">
          <img src="<?= base_url(); ?>vendor/front-end/assets/img/values-2.png" class="img-fluid" alt="">
            <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
          <!-- <h3>Bright Me</h3> -->
          <p>AI-Based Skin Analysis Application with Blockchain Security for Skin Care Recommendations</p>
          <a href=''>Bright Me.id</a>
        </div>
      </div>
      
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box" data-aos="fade-up" data-aos-delay="400">
          <img src="<?= base_url(); ?>vendor/front-end/assets/img/values-3.png" class="img-fluid" alt="">
            <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
          <!-- <h3>Bright Me</h3> -->
          <p>Blockchain-Based Platform, Which Brings Transparency to Event Needs</p>
          <a href=''>Event+.id</a>
        </div>
      </div>
      
      </div>

    </div>

    </div>

  </div>

</section><!-- End Values Section -->

<main id="main">

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>FOCUS TECHNOLOGY</h2>
        <p>REE TECH SERVES VARIOUS SECTORS</p>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <img src="<?= base_url(); ?>vendor/front-end/assets/img/features.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Manufacture</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Fisheries and Marine</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Agriculture</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Healthcare</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Transportation</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Energy</h3>
              </div>
            </div>

          </div>
        </div>

      </div> <!-- / row -->

      <!-- Feature Icons -->
      <!-- <div class="row feature-icons" data-aos="fade-up">
      <!-  <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>-->

      <!--  <div class="row">-->

      <!--    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">-->
      <!--      <img src="<?= base_url(); ?>vendor/front-end/assets/img/features-3.png" class="img-fluid p-4" alt="">-->
      <!--    </div>-->

      <!--    <div class="col-xl-8 d-flex content">-->
      <!--      <div class="row align-self-center gy-4">-->

      <!--        <div class="col-md-6 icon-box" data-aos="fade-up">-->
      <!--          <i class="ri-line-chart-line"></i>-->
      <!--          <div>-->
      <!--            <h4>Corporis voluptates sit</h4>-->
      <!--            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>-->
      <!--          </div>-->
      <!--        </div>-->

      <!--        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">-->
      <!--          <i class="ri-stack-line"></i>-->
      <!--          <div>-->
      <!--            <h4>Ullamco laboris nisi</h4>-->
      <!--            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>-->
      <!--          </div>-->
      <!--        </div>-->

      <!--        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">-->
      <!--          <i class="ri-brush-4-line"></i>-->
      <!--          <div>-->
      <!--            <h4>Labore consequatur</h4>-->
      <!--            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>-->
      <!--          </div>-->
      <!--        </div>-->

      <!--        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">-->
      <!--          <i class="ri-magic-line"></i>-->
      <!--          <div>-->
      <!--            <h4>Beatae veritatis</h4>-->
      <!--            <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>-->
      <!--          </div>-->
      <!--        </div>-->

      <!--        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">-->
      <!--          <i class="ri-command-line"></i>-->
      <!--          <div>-->
      <!--            <h4>Molestiae dolor</h4>-->
      <!--            <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>-->
      <!--          </div>-->
      <!--        </div>-->

      <!--        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">-->
      <!--          <i class="ri-radar-line"></i>-->
      <!--          <div>-->
      <!--            <h4>Explicabo consectetur</h4>-->
      <!--            <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>-->
      <!--          </div>-->
      <!--        </div>-->

      <!--      </div>-->
      <!--    </div>-->

      <!--  </div>-->

      <!--</div> -->
      <!-- End Feature Icons -->

    </div>

  </section>
  <!-- End Features Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Services</h2>
        <p>OUR SERVICE</p>
      </header>

      <div class="row gy-4">
        <?php foreach ($layanan as $key => $value) : 

          if ($value->status_layanan == "Publish") : ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box blue">
                <div class="post-img"> <img src="<?= base_url('assets/img/layanan/') . $value->gambar_layanan; ?>" alt="" class="img-fluid rounded " style="height: 100px; width:100px;">
                </div>
                <h3><?= $value->judul_layanan; ?></h3>
                <a href="<?= base_url('home/detaillayanan/' . $value->slug_layanan); ?>" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

      </div>

    </div>

  </section><!-- End Services Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>F.A.Q</h2>
        <p>FREQUENTLY ASKED QUESTIONS</p>
      </header>

      <div class="row">
        <div class="col-lg-6">
          <!-- F.A.Q List 1-->
          <div class="accordion accordion-flush" id="faqlist1">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  Why Should REE TECH ?
                </button>
              </h2>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  REE TECH A company focused on AI, Web 3 and IoT in Indonesia. It aims to be a catalyst in increasing productivity and effective and efficient business processes in all industrial sectors. Digital transformation throughout the industry has begun to increase maximum production results with a simple and time-consuming process. However, it will take a lot of money to make those changes. REE TECH Company comes at an affordable cost, so it is hoped that it can help and facilitate various industrial sectors to transform.

                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                 What are The Functions and Venefits of Ree tech Technology in Running your Business ?

                </button>
              </h2>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  The growth of The Business World Which Continues to Increase Drastically Creates Competition. By Utilizing The Technology that we Make, We can Increase Customer Confidence in The Business That we Run. In Addition, We are Committed to Providing the Cheapest Service for Businesses that are New to Technology

                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                 What Technology is Offered by Reetech ?
                </button>
              </h2>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  We Offer Machine Learning Model Products, Web3 Scripts, and Calibration on IOT, The Oroducts We Offer are Accessible for Free and Paid with Several Options.
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6">

          <!-- F.A.Q List 2-->
          <div class="accordion accordion-flush" id="faqlist2">

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                 What are the benefits of using IoT in an industry?
                </button>
              </h2>
              <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  IoT technology can be applied to various industries. In addition to increasing the efficiency of company operations, IoT makes it easier to run a business with automation, business asset management, cost control, and much more. For example, big data can be used to support predictive analytics to cut maintenance costs. By monitoring the condition of assets in real-time, companies can see the performance of devices and accurately predict the occurrence of breakdowns and avoid complete breakdowns. Big data obtained through IoT technology will help businesses provide the best service for corporate asset management, customer satisfaction, create new revenue models, and prepare for a more mature digital transformation. IoT can also be applied in various industrial sectors such as Manufacturing, Transportation, Energy, Mining, and Logistics.

                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                  What are the benefits of using AI in an industry?
                </button>
              </h2>
              <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  he integration of Artificial Intelligence (AI) in various industries offers a multitude of benefits that can significantly transform and optimize processes, decision-making, and overall operations. Some of the key benefits of using AI in an industry include:

Automation: AI can handle repetitive and mundane tasks, freeing up human resources to focus on more strategic and creative activities. This leads to increased efficiency and reduced human error.

Data Analysis: AI can process and analyze large volumes of data quickly and accurately, extracting valuable insights that might be difficult for humans to discern. This helps in making informed decisions and identifying patterns, trends, and anomalies.

Predictive Analytics: By analyzing historical data, AI can make predictions about future outcomes. This is valuable for industries like finance, marketing, and healthcare, where accurate predictions are crucial for planning and strategy development.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                  What are the benefits of using Web3 in an industry?
                </button>
              </h2>
              <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  Web3, often referred to as the "decentralized web," is a vision for the future of the internet that aims to create a more user-centric and decentralized online environment using blockchain technology and decentralized protocols. Implementing Web3 principles in various industries can offer several benefits:

Decentralization: Web3 technology reduces reliance on central authorities, giving more control to individuals. This can lead to more equitable distribution of power and resources, reducing the risk of censorship or manipulation by a single entity.

Data Ownership and Privacy: With Web3, users have greater ownership and control over their personal data. Data is often stored in a decentralized manner, allowing users to grant access only when necessary and reducing the likelihood of large-scale data breaches.

Trust and Transparency: Web3 technologies, often built on blockchain, provide transparent and immutable records. This can enhance trust between parties, as transactions and actions can be verified independently.

Interoperability: Web3 protocols aim to be interoperable across different platforms and services. This can simplify data sharing and communication between systems, fostering innovation and collaboration.
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </section><!-- End F.A.Q Section -->

   <!--======= Portfolio Section ======= -->
   <!--======= Testimonials Section ======= -->
   
   <!--
   <section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Testimonials</h2>
        <p>What they are saying about us</p>
      </header>

      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper ">
          <?php foreach ($portfolio as $key => $value) :
            // strip tags to avoid breaking any html
            $isi = strip_tags($value->testimoni);
            if (strlen($isi) > 200) {

              // truncate isi
              $isiCut = substr($isi, 0, 200);
              $endPoint = strrpos($isiCut, ' ');

              //if the isi doesn't contain any space then it will cut without word basis.
              $isi = $endPoint ? substr($isiCut, 0, $endPoint) : substr($isiCut, 0);
            }
            if ($value->status_portfolio == "Publish") : ?>
              <div class="swiper-slide">
                <div class="card testimonial-item ">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <?= $isi; ?>
                  </p>
                  <div class="profile mt-auto">
                    <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="testimonial-img" alt="">
                    <h3><?= $value->judul_portfolio; ?></h3>
                    <h4><?= $value->nama_layanan; ?></h4>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section>
   End Testimonials Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>REE TECH PATNER</h2>
        <p>PATNER AND INVESTOR</p>
      </header>

      <div class="clients-slider swiper-container">
        <div class="swiper-wrapper align-items-center">
          <?php foreach ($client as $key => $value) :
            if ($value->publish == "Publish") : ?>
              <div class="swiper-slide">
                <a href="<?= $value->website?>" target="_blank">
                  <img src="<?= base_url('assets/img/client/') . $value->gambar_client; ?>" class="img-fluid" alt="" style="width: 500px !important; height: auto !important;">
                </a>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </div>

  </section><!-- End Clients Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  <!--<section id="recent-blog-posts" class="recent-blog-posts">-->

  <!--  <div class="container" data-aos="fade-up">-->

  <!--    <header class="section-header">-->
  <!--      <h2>Blog</h2>-->
  <!--      <p>RECENT POSTS FORM OUR BLOG</p>-->
  <!--    </header>-->

  <!--    <div class="row">-->
  <!--      ?php foreach ($berita as $key => $value) :-->
          <!--// strip tags to avoid breaking any html-->
  <!--        $isi = strip_tags($value->isi_berita);-->
  <!--        if (strlen($isi) > 200) {-->

            <!--// truncate isi-->
  <!--          $isiCut = substr($isi, 0, 200);-->
  <!--          $endPoint = strrpos($isiCut, ' ');-->

            <!--//if the isi doesn't contain any space then it will cut without word basis.-->
  <!--          $isi = $endPoint ? substr($isiCut, 0, $endPoint) : substr($isiCut, 0);-->
  <!--        }-->
  <!--        if ($value->status_berita == "Publish") : ?>-->
  <!--          <div class="col-lg-4 mb-2">-->
  <!--            <div class="post-box">-->
  <!--              <div class="post-img"><img src="<?= base_url('assets/img/berita/') . $value->gambar_berita; ?>" class="img-fluid" alt=""></div>-->
  <!--              <span class="post-date"><?= date('d-M-Y', strtotime($value->date_cretated)); ?></span>-->
  <!--              <h3 class="post-title"><?= $value->judul_berita; ?></h3>-->
  <!--              <a href="<?= base_url('home/detail/' . $value->slug_berita); ?>" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>-->
  <!--            </div>-->
  <!--          </div>-->
  <!--        ?php endif; ?>-->
  <!--      ?php endforeach; ?>-->

  <!--    </div>-->

  <!--  </div>-->

  <!--</section><!-- End Recent Blog Posts Section -->

  <!-- ======= Contact Section ======= -->
  <!-- <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p><?= $setting->alamat; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p><?= $setting->no_telepon; ?><br><?= $setting->no_telepon; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p><?= $setting->email; ?><br><?= $setting->email; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>

        </div>

      </div>

    </div>

  </section>End Contact Section -->

</main><!-- End #main -->