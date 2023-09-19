<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?> &rsaquo; <?= $subtitle; ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>vendor/back-end/assets/css/bootstrap.min.css">
  <!--<script src="<?= base_url(); ?>vendor/back-end/assets/js/bootstrap.bundle.min.js"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?= base_url() ?>vendor/back-end/assets/fonts/fontawesome/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/back-end/assets/fonts/iconic/css/material-design-iconic-font.min.css">
  <!-- CSS Libraries -->
  <!-- Template CSS -->
  <link rel="shortcut icon" href="<?= base_url('assets/img/company/') . $image; ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url() ?>vendor/back-end/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>vendor/back-end/assets/css/components.css">

  <link rel="stylesheet" href="<?= base_url() ?>vendor/back-end/assets/plugins/toastr/toastr.min.css">
</head>

<body>
  <section id="app" class="vw-100 vh-100">
    <div class="w-100 d-flex justify-content-center align-items-end" style="height: 35vh;background-color: #012970;">
        <div class="d-flex rounded-circle bg-white border border-dark" style="width: 100px; height: 100px; margin-bottom: -40px;">
            <img src="<?= base_url(). 'assets/img/profile/'. $member->image?>" alt="" class="rounded-circle h-100 w-100" style="object-fit: contain;">

        </div>
    </div>
    
    <div class="d-flex flex-column justify-content-center align-items-center text-dark font-weight-bold" style="margin-top: 50px;">
        <h2 class="text-center"><?= $member->nama?></h2>
        <?php if($member->jenis_member == 1){ ?>
                <p class="font-weight-light" style="margin-top: -10px;">Member Free</p>
        <?php  }elseif($member->jenis_member == 2){ ?>
                <p class="font-weight-light" style="margin-top: -10px;">Member Partner <?php $is_membership_expired ? print(' - '.'<b class="text-danger">expired</b>') : '' ?></p>
        <?php }elseif($member->jenis_member == 3){ ?>
                <p class="font-weight-light" style="margin-top: -10px;">Member Premium <?php $is_membership_expired ? print(' - '.'<b class="text-danger">expired</b>') : '' ?></p>
        <?php } ?>
    </div>
    <div class="d-flex justify-content-center" style="gap: 20px;">
            <div class="text-center" style="width: 150px;">
                <h3 class="text-dark"><?= $total_download?></h3>
                <p>Jumlah Download</p>
            </div>
            <div class="bg-secondary" style="width: 3px; height: 60px;"></div>
            <div class="text-center" style="width: 150px;">
                <h3 class="text-dark"><?= $limit?></h3>
                <p>Limit Download Harian</p>
            </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-3 flex-column flex-md-row"  style="gap: 20px;">
        <a href="https://urlis.net/Reetech" target="_blank" class="text-decoration-none text-center p-2 rounded-lg text-white" style="width: 200px; background-color: #012970;">Upgrade</a>
        <a href="<?= base_url('frontsite/profile/')?>" class="text-decoration-none text-center p-2 rounded-lg text-dark border border-dark" style="width: 200px;">Edit Profile</a>
    </div>
  </section>

















  <!-- General JS Scripts -->
  <script src="<?= base_url(); ?>vendor/back-end/assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url(); ?>vendor/back-end/assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>vendor/back-end/assets/js/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url(); ?>vendor/back-end/assets/js/moment.min.js"></script>
  <script src="<?= base_url(); ?>vendor/back-end/assets/js/stisla.js"></script>
  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?= base_url(); ?>vendor/back-end/assets/js/scripts.js"></script>
  <script src="<?= base_url(); ?>vendor/back-end/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <!-- toast flashdata -->
  <script src="<?= base_url(); ?>vendor/back-end/assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
  <?php if ($this->session->flashdata('success')) : ?>
    <div class="success-message"><?= $this->session->flashdata('success') ?></div>
    <script type="text/javascript">
      toastr.success($(".success-message"))
    </script>
  <?php endif; ?>

  <?php if ($this->session->flashdata('info')) : ?>
    <div class="info-message"><?= $this->session->flashdata('info') ?></div>
    <script type="text/javascript">
      toastr.info($(".info-message"))
    </script>
  <?php endif; ?>

  <?php if ($this->session->flashdata('warning')) : ?>
    <div class="warning-message"><?= $this->session->flashdata('warning') ?></div>
    <script type="text/javascript">
      toastr.warning($(".warning-message"))
    </script>
  <?php endif; ?>

  <?php if ($this->session->flashdata('error')) : ?>
    <div class="error-message"><?= $this->session->flashdata('error') ?></div>
    <script type="text/javascript">
      toastr.error($(".error-message"))
    </script>
  <?php endif; ?>
</body>

</html>