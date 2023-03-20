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

        <section class="activity-main-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 text-center">
                        <h3 class="">大會活動</h3>
                        <hr>
                    </div>
                </div>
                <div class="row row-mommy">
                    <div class="col-md-3 col-6 col-top-flag">
                        <!-- <img src="/assets/img/img-activity-mommy.png" alt=""> -->
                        <img src="<?="{$storage_url}pic/{$exhibition['exhibition_classes_activity_pic1']}";?>" alt="">
                    </div>
                    <?php foreach ($activity_list['moms'] as $row) { ?>
                    <div class="col-md-3 col-6">
                        <div class="h-100">
                            <div class="activity-block">
                                <h5 class="c-white font-weight-bold"><?=$row['activities_title'];?></h5>
                                <p class="c-white"><?=$row['activities_subtitle'];?></p>
                                <a href="/activity/<?=$row['id'];?>" class="btn btn-white b-hover-white c-white rounded-pill btn-join">
                                    我要報名<i class="fas fa-arrow-right"></i>
                                </a>
                                <img src="<?="{$storage_url}pic/{$row['activities_icon2']}";?>" alt="<?=$row['activities_title'];?>" class="activity-icon">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row row-baby">
                    <div class="col-md-3 col-6 col-top-flag">
                        <!-- <img src="/assets/img/img-activity-baby.png" alt=""> -->
                        <img src="<?="{$storage_url}pic/{$exhibition['exhibition_classes_activity_pic2']}";?>" alt="">
                    </div>
                    <?php foreach ($activity_list['babies'] as $row) { ?>
                    <div class="col-md-3 col-6">
                        <div class="h-100">
                            <div class="activity-block">
                            <h5 class="c-white font-weight-bold"><?=$row['activities_title'];?></h5>
                                <p class="c-white"><?=$row['activities_subtitle'];?></p>
                                <a href="/activity/<?=$row['id'];?>" class="btn btn-white b-hover-white c-white rounded-pill btn-join">
                                    我要報名<i class="fas fa-arrow-right"></i>
                                </a>
                                <img src="<?="{$storage_url}pic/{$row['activities_icon2']}";?>" alt="<?=$row['activities_title'];?>" class="activity-icon">
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
