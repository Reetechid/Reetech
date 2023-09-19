
<main class="portfolio-download">
    <div class="download-wrapper">
       <p style="color: red; font-size: 10pt;"><?= $this->session->flashdata('warning'); ?></p>
        <div>
            <?php if($member->jenis_member == 1){ ?>
                    <h4>AKUN FREE</h4>
            <?php  }elseif($member->jenis_member == 2){ ?>
                    <h4>AKUN PARTNER</h4>
            <?php }elseif($member->jenis_member == 3){ ?>
                    <h4>AKUN PREMIUM</h4>
            <?php } ?>
            <p>Tingkatkan limit download harian pada halaman <a href="<?= base_url('frontsite/dashboard/');?>" class=""><b>Dashboard</b></a></p>
        </div>
        <a href="<?= base_url('home/download/'. $portfolio->slug_portfolio);?>" class="download-link">DOWNLOAD NOW</a>
    </div>
</main>

