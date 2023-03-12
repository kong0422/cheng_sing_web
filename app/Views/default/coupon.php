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
        <section class="coupon-main-page color-block">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 text-center">
                        <h3 class="">好康優惠</h3>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($coupon_list as $index => $row) { ?>
                    <div class="col-md-4 mb-3">
                        <div class="row">
                            <div class="col-6 p-0"><img src="<?="{$storage_url}pic/{$row['activities_pic']}";?>" alt="" class="w-100"></div>
                            <div class="col-6 p-0 el-color-block">
                            <p class="c-white"><?=$row['activities_subtitle'];?></p>
                                <h2 class="h5 c-white"><?=$row['activities_title'];?></h2>
                                <a :href="/activity-content-step-1/'+item.id" class="btn btn-white rounded-pill px-4 b-hover-white">我要預約</a>
                            </div>
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
