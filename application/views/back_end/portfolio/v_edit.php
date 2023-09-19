<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="<?= base_url('portfolio'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1><?= $subtitle; ?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="<?= base_url('portfolio'); ?>">Daftar Portfolio</a></div>
        <div class="breadcrumb-item"><?= $subtitle; ?></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"><?= $subtitle; ?></h2>
      <p class="section-lead">
        Di halaman ini Anda dapat mengedit Portfolio <strong> <?= $portfolio->judul_portfolio; ?></strong>
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit Portfolio</h4>
              
            </div>
            <div class="card-body">
              <?php if(isset($error)) :?>
                <p class="" style="color: red !important;"><?= $error;?></p>
              <?php endif;?>
              <form method="POST" action="<?= base_url('portfolio/edit/' . $portfolio->id_portfolio); ?>" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-lg-12 col-sm-12 col-md-12">
                    <label class="">Judul</label>
                    <input type="text" class="form-control" name="judul" autofocus value="<?= $portfolio->judul_portfolio; ?>">
                    <small class="text-danger "><?= form_error('judul') ?></small>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-4 col-sm-12 col-md-12">
                    <label for="status">Status</label>
                    <select name="status" class="form-control selectric">
                      <option value="<?= $portfolio->status_portfolio; ?>" selected><?= $portfolio->status_portfolio; ?></option>
                      <option value="Publish">Publish</option>
                      <option value="Draft">Draft</option>
                      <option value="Pending">Pending</option>
                    </select>
                  </div>
                  <div class="form-group col-lg-4 col-sm-12 col-md-12">
                    <label>Tanggal Project</label>
                    <input type="date" class="form-control" name="date" value="<?= $portfolio->date_project; ?>">
                  </div>
                  <div class="form-group col-lg-4 col-sm-12 col-md-12">
                    <label class="">Layanan Portfolio</label>
                    <select name="layanan" class="form-control selectric">
                      <option value="<?= $portfolio->judul_layanan; ?>" selected><?= $portfolio->judul_layanan; ?></option>
                      <?php foreach ($layanan as $key => $values) : ?>
                        <option value="<?= $values->judul_layanan; ?>"><?= $values->judul_layanan; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-floatings">
                    <label for="testimoni">Testimoni</label>
                    <textarea class="form-control" name="testimoni" placeholder="" id=" floatingTextarea2" style="height: 60px; resize: none;"><?= $portfolio->testimoni; ?></textarea>
                    <small class="text-danger "><?= form_error('testimoni') ?></small>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-form-label ">Isi portfolio</label>
                  <div class="">
                    <textarea name="isi" id="portfolio" value="<?= set_value('isi'); ?>"><?= $portfolio->isi_portfolio; ?></textarea>
                    <small class="text-danger "><?= form_error('isi') ?></small>
                  </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center">
                  <div class="form-group col-lg-4 col-sm-12 col-md-12 d-flex align-items-center justify-content-center">
                    <div class="image-preview ">
                      <label for="image-upload" id="image-label">Choose File</label>
                      <input type="file" name="image" id="image-upload" onchange="previewFile(this);" value="<?= $portfolio->gambar_portfolio; ?>" />
                      <img class="rounded" style="width: 100%; height:100%" src="<?= base_url('assets/img/portfolio/') . $portfolio->gambar_portfolio; ?>" alt="" srcset="" id="image-previews">
                      <small class="text-danger "><?= form_error('image') ?></small>
                    </div>
                  </div>
                   <div class="form-group col-lg-4 col-sm-12 col-md-12 d-flex align-items-center justify-content-center">
                    <div class="d-flex justify-content-center align-items-center text-dark" style="width: 250px; height: 250px; border: 2px dashed #ddd; border-radius: 3px; position: relative; overflow: hidden; background-color: #ffffff;">
                      <label for="model-upload" class="text-center text-secondary"><?= $portfolio->url_file?></label>
                      <input class="d-none" type="file" name="model" id="model-upload" onchange="$(this).prev('label').clone(); var file = $('#model-upload')[0].files[0].name; $(this).prev('label').text(file);" />
                      <small class="text-danger "><?= form_error('model') ?></small>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12 col-md-12 d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-primary ">Edit Portfolio</button>
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