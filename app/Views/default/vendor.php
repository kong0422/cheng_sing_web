<?= $this->extend("{$template}/common/layout") ?>

<?= $this->section('css') ?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <?= $this->include("{$template}/common/header") ?>

    <div class="main">
        <section class="hero-img">
            <div class="container hero-img-desktop">
                <div class="row"><img src="<?=$cover_pic;?>" alt="<?=$meta['title'];?>"></div>
            </div>
            <div class="container hero-img-mob">
                <div class="row"><img src="<?=$cover_mpic;?>" alt="<?=$meta['title'];?>"></div>
            </div>
        </section>

        <section class="vendor vendor-main-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 text-center">
                        <h3 class="">參與廠商</h3>
                        <hr>
                    </div>
                </div>
                <div class="row  vendor-group">
                    <?php foreach ($vendor_list as $index => $row) { ?>
                    <div class="col-md-2">
                        <div class="img-box w-100">
                        <a href="/vendor/<?=$row['id'];?>">
                                <img src="<?="{$storage_url}vendor/{$row['vendors_logo']}";?>" alt="<?=$row['vendors_name'];?>" class="w-100 vendor-obj">
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>

    <?= $this->include("{$template}/common/footer") ?>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>
