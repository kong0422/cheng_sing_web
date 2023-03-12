<?= $this->extend("{$template}/common/layout") ?>

<?= $this->section('css') ?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <?= $this->include("{$template}/common/header") ?>

    <div class="main">
        <section class="hero-img">
            <div class="container hero-img-desktop">
                <div class="row"><img src="<?="{$storage_url}pic/{$cover['pic']}";?>" alt="<?=$meta['title'];?>"></div>
            </div>
            <div class="container hero-img-mob">
                <div class="row"><img src="<?="{$storage_url}pic/{$cover['mpic']}";?>" alt="<?=$meta['title'];?>"></div>
            </div>
        </section>

        <section class="vendor-content">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-12 p-0 text-center">
                    <h3 class=""><?=$vendor['vendors_title'];?></h3>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="vendor-content">
                            <div class="img-box w-100 text-center">
                                <img src="<?="{$storage_url}vendor/{$vendor['vendors_logo']}";?>" alt="<?=$vendor['vendors_name'];?>" class="w-100">
                            </div>
                            <p class="my-4"><?=$vendor['vendors_content'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 text-center">
                        <h3 class="">其他廠商</h3>
                    </div>
                </div>
                <div class="js-slideshowVendor">
                    <?php foreach ($vendor_list as $index => $row) { ?>
                    <div class="slide" v-for="(item,index) in vendor" :key="index">
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
