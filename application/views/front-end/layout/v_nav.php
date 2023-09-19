<nav id="navbar" class="navbar">
  <ul>
    <li><a class="nav-link scrollto <?= $this->uri->segment(1) == '/' || $this->uri->segment(2) == '#hero' ? 'active' : '';?>" href="<?= base_url('home/#hero'); ?>">Home</a></li>
    <li><a class="nav-link scrollto <?= $this->uri->segment(2) == 'about' ? 'active' : '';?>" href="<?= base_url('home/about'); ?>">Profile</a></li>
    <li><a class="nav-link scrollto <?= $this->uri->segment(2) == 'portfolio' || $this->uri->segment(2) == 'portfoliodetail' || $this->uri->segment(2) == 'portfolioDownload' ? 'active' : '';?>" href="<?= base_url('home/portfolio'); ?>">Product</a></li>
    <li><a class="nav-link scrollto <?= $this->uri->segment(2) == 'blog' || $this->uri->segment(2) == 'detail' ? 'active' : '';?>" href="<?= base_url('home/blog'); ?>">Blog</a></li>
    <li><a class="getstarted scrollto" href="mailto:reetechcompany@gmail.com">Start Collaboration</a></li>
  </ul>
  <i class="bi bi mobile-nav-toggle"></i>
</nav><!-- .navbar -->

</div>
</header><!-- End Header -->