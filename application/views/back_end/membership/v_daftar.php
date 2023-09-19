<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $subtitle; ?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><?= $subtitle; ?></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"><?= $subtitle; ?></h2>
      <p class="section-lead">
        <?= $subtitle; ?>
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h4><?= $subtitle; ?></h4>
              <div class="float-right">
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="example1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        No
                      </th>
                      <th class="text-center">Nama Lengkap</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Jenis Member</th>
                      <th class="text-center">Limit Download Harian</th>
                      <th class="text-center">Tanggal Expired Member</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($membership as $key => $value) : ?>
                      <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td class="text-center"> <?= $value->nama?>
                          <div class="table-links">
                            <div class="bullet"></div>
                            <a data-toggle="modal" data-target="#hapus<?= $value->user_id; ?>" class="text-danger">Hapus</a>
                          </div>
                        </td>
                        <td class="text-center"><?= $value->email; ?></td>
                        <td class="text-center">
                            <?php if($value->jenis_member == '1') :?>
                                <?= 'Member Free';?>
                            <?php elseif($value->jenis_member == '2') :?>
                                <?= 'Member Partner';?>
                            <?php elseif($value->jenis_member == '3') :?>
                                <?= 'Member Premium';?>
                            </td>
                            <?php endif; ?>
                        <td class="text-center"><?= $value->limit_download; ?></td>
                        <td class="text-center"><?= $value->date_expired; ?></td>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- hapus Modal -->
<?php
foreach ($membership as $key => $value) : ?>
  <div class="modal fade" id="hapus<?= $value->id_user; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title mr-1">Menghapus Membership<h6 class="text-center badge badge-danger"><?= $value->nama; ?></h6>
          </h6>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" action="<?= base_url('membership/hapus/' . $value->id_user); ?>">
            <h5>Apakah Anda Yakin?</h5>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>