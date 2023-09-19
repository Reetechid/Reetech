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
  <section id="app" class="w-100 vh-100">
    <div class="w-100 px-5 py-5" style="height: 35vh;background-color: #012970;">
        <span>
            <a href="<?= base_url('frontsite/dashboard/')?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 2rem; height: 2rem; color: white;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>
            </a>
        </span>
    </div>
    <div class="d-flex flex-column flex-lg-row align-items-center w-100 py-4" style="height: 100  vh;background-color: white;">
        
        <div class="d-flex justify-content-center" style="width: 40%;">
            <div class="flex flex-colum align-items-center justify-content-center">
                <p class="text-center" style="font-size: 16px;"><b>Profile</b></p>
                <div class="d-flex rounded-circle bg-white border border-dark justify-content-center mx-auto mt-2" style="width: 100px;height: 100px;">
                    <img src="<?= base_url(). 'assets/img/profile/'.$member->image?>" alt="" class="rounded-circle h-100 w-100" style="object-fit: contain;">
                </div>
                <h6 class="text-center text-dark mt-3"><?= $member->nama?></h6>
                <p class="font-weight-light text-center" style="margin-top: -10px;"><?= $member->pekerjaan?></p>
                <p class="font-weight-light text-center" style="margin-top: -20px;"><?= $member->alamat?></p>
                <form action="<?= base_url('frontsite/profile/updateAvatar/'. $member->user_id)?>" enctype="multipart/form-data" method="post">
                    <label for="image" class="d-block text-decoration-none text-center px-4 py-2 rounded-lg text-white" style="background-color: #012970;">
                        Upload new avatar
                    </label>
                    <input type="file" id="image" name="image" onchange="form.submit()" style="display:none;">
                </form>
            </div>    
        </div>
        
        <div class="bg-secondary d-none d-lg-block" style="width: 3px;"></div>
        <div class="mx-5" style="width: 50%;">
            
            <form method="post" action="<?= base_url('frontsite/profile/edit/'. $member->user_id)?>">
                <div class="d-lg-flex justify-content-between d-none">
                    <p class="text-dark align-self-center" style="font-size: 16px;"><b>BASIC INFO</b></p>
                    <button type="submit" class="btn btn-primary px-5 align-self-center">Save</button>
                </div>
                <div class="d-flex justify-content-center mt-5 d-lg-none">
                    <p class="text-dark align-self-center" style="font-size: 16px;"><b>BASIC INFO</b></p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="nama">Nama <code style="color: red;">*</code></label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $member->nama?>" required>
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan <code style="color: red;">*</code></label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $member->pekerjaan?>" required>
                </div>
                <div class="form-group">
                    <label for="instansi">Instansi <code style="color: red;">*</code></label>
                    <input type="text" class="form-control" id="instansi" name="instansi" value="<?= $member->instansi?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat <code style="color: red;">*</code></label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $member->alamat?>" required>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary px-5 align-self-center d-block d-lg-none">Save</button>
                </div>
            </form>
        </div>
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