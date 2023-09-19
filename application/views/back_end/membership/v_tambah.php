<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1><?= $subtitle; ?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url('home'); ?>">Dashboard</a></div>
        <div class="breadcrumb-item"><?= $subtitle; ?></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"><?= $subtitle; ?></h2>
      <p class="section-lead">
        Di halaman ini Anda dapat menambahkan membership
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Tambah Membership</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="<?= base_url('membership/tambahMembership'); ?>" enctype="multipart/form-data">
                
                <div class="row">
                  <div class="form-group col-lg-4 col-sm-12 col-md-12">
                    <label class="">Jenis Membership <code class="text-danger">*</code></label>
                    <select name="jenis_member" class="form-control selectric" required>
                        <option selected hidden>Pilih jenis member</option>
                        <option value="2">Partner</option>
                        <option value="3">Premium</option>
                    </select>
                    <?php echo form_error('jenis_member'); ?>
                  </div>

                   <div class="form-group col-lg-4 col-sm-12 col-md-12">
                    <label class="">Nama Member <code class="text-danger">*</code></label>
                    <select name="id_user" class="form-control selectric" required>
                        <option selected hidden>Pilih member</option>
                      <?php foreach ($member as $key => $value) : ?>
                        <option value="<?= $value->user_id; ?>"><?= $value->nama; ?></option>
                      <?php endforeach; ?>
                    </select>
                    <?php echo form_error('id_user'); ?>
                  </div>

                  <div class="form-group col-lg-4 col-sm-12 col-md-12">
                    <label class="">Limit Download Harian <code class="text-danger">*</code></label>
                    <input type="number" class="form-control" name="limit_download" required>
                    <?php echo form_error('limit_download'); ?>
                  </div>

                  <div class="form-group col-lg-4 col-sm-12 col-md-12">
                    <label>Tanggal Expired</label>
                    <input type="date" class="form-control" name="date_expired" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12 col-md-12 d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-primary ">Tambah Membership</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>