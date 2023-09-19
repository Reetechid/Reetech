<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="<?= base_url('member'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1><?= $subtitle; ?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="<?= base_url('member'); ?>">Daftar Member</a></div>
        <div class="breadcrumb-item"><?= $subtitle; ?></div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title"><?= $member->nama; ?></h2>
      <p class="section-lead">
      </p>

      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card profile-widget">
            <div class="profile-widget-header">
              <img alt="image" src="<?= base_url('assets/img/profile/') . $member->image ?>" class="border border-black rounded-circle profile-widget-picture">
            </div>
            <div class="profile-widget-description">
              <div class="profile-widget-name text-dark"><?= $member->nama ?> <div class="text-muted d-inline font-weight-normal">
                  <div class="slash"></div> <?= $member->pekerjaan.', '. $member->instansi ?>
                </div>
              </div>
              <p><strong>Email: </strong><?= $member->email; ?></p>
              <p><strong>Total Download: </strong><?= $download; ?></p>
              <p><strong>Alamat: </strong><?= $member->alamat; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>