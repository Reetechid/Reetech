<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $subtitle; ?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url('home'); ?>">Dashboard</a></div>
        <div class="breadcrumb-item"><?= $subtitle; ?></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"><?= $subtitle; ?></h2>
      <p class="section-lead">
        Di halaman ini Anda dapat membuat Portfolio baru
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Tulis Portfolio</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="<?= base_url('portfolio/tambah'); ?>" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-lg-12 col-sm-12 col-md-12">
                    <label class="">Judul</label>
                    <input type="text" class="form-control" name="judul" autofocus value="<?= set_value('judul'); ?>">
                    <small class="text-danger "><?= form_error('judul') ?></small>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4 col-sm-12 col-md-12">
                    <label for="status">Status</label>
                    <select name="status" class="form-control selectric">
                      <option value="Publish">Publish</option>
                      <option value="Draft">Draft</option>
                      <option value="Pending">Pending</option>
                    </select>
                  </div>
                  <div class="form-group col-lg-4 col-sm-12 col-md-12">
                    <label>Tanggal Project</label>
                    <input type="date" class="form-control" name="date">
                  </div>
                  <div class="form-group col-lg-4 col-sm-12 col-md-12">
                    <label class="">Layanan</label>
                    <select name="layanan" class="form-control selectric">
                      <?php foreach ($layanan as $key => $value) : ?>
                        <option value="<?= $value->judul_layanan; ?>"><?= $value->judul_layanan; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-floatings">
                    <label for="testimoni">Testimoni</label>
                    <textarea class="form-control" name="testimoni" placeholder="Isi testimoni" id="floatingTextarea2" style="height: 100px; resize: none;" value="<?= set_value('testimoni'); ?>"></textarea>
                    <small class="text-danger "><?= form_error('testimoni') ?></small>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-form-label ">Isi portfolio</label>
                  <div class="">
                    <textarea name="isi" id="portfolio" value="<?= set_value('isi'); ?>">Isi portfolio</textarea>
                    <small class="text-danger "><?= form_error('isi') ?></small>
                  </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center">
                  <div class="form-group col-lg-4 col-sm-12 col-md-12 d-flex align-items-center justify-content-center">
                    <div class="image-preview ">
                      <label for="image-upload" id="image-label">Pilih Gambar</label>
                      <input type="file" required name="image" id="image-upload" onchange="previewFile(this);" />
                      <img class="rounded" style="width: 100%; height:100%" src="<?= base_url(); ?>vendor/back-end/assets/img/transparent.png" alt="" srcset="" id="image-previews">
                      <small class="text-danger "><?= form_error('image') ?></small>
                    </div>
                  </div>
                  <div class="form-group col-lg-4 col-sm-12 col-md-12 d-flex align-items-center justify-content-center">
                    <div class="d-flex justify-content-center align-items-center text-dark" style="width: 250px; height: 250px; border: 2px dashed #ddd; border-radius: 3px; position: relative; overflow: hidden; background-color: #ffffff;">
                      <label for="model-upload" class="text-center text-secondary">Pilih File Model</label>
                      <input class="d-none" type="file" required name="model" id="model-upload" onchange="$(this).prev('label').clone(); var file = $('#model-upload')[0].files[0].name; $(this).prev('label').text(file);" />
                      <small class="text-danger "><?= form_error('model') ?></small>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12 col-md-12 d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-primary ">Buat portfolio</button>
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