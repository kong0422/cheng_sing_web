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
        <section class="content-page activity-content activity-content-before-login">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-12 pl-md-0">
                        <h1 class="h3 text-center mb-4">
                            [<?=$news['news_class'];?>]<?=$news['news_title'];?>
                        </h1>
                        <div class="content">
                            <?=$news['news_content'];?>
                        </div>
                    </div>
                    <div class="col-3 pr-0 d-none d-md-block">
                        <div class="sidebar side-latestnews">
                            <div class="bar bg-red">最新消息</div>
                            <div class="content-group">
                                <?php foreach ($news_list as $index => $row) { ?>
                                <div class="content">
                                    <div class="title">
                                        <a href="/news/<?=$row['id'];?>" class="c-black mb-1"><?=$row['news_title'];?></a>
                                    </div>
                                    <div class="body">
                                    </div>
                                    <hr>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="sidebar side-coupon">
                            <div class="bar bg-yellow">相關優惠</div>
                            <div class="content-group">
                                <?php foreach ($coupon_list as $index => $row) { ?>
                                <div class="content">
                                    <div class="title">
                                        <a href="/activity/<?=$row['id'];?>" class="c-black mb-1"><?=$row['activities_title'];?></a>
                                    </div>
                                    <div class="body">
                                    </div>
                                    <hr>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="sidebar side-activity">
                            <div class="bar bg-skyblue">相關活動</div>
                            <div class="content-group">
                                <?php foreach ($activity_list as $index => $row) { ?>
                                <div class="content">
                                    <div class="title">
                                        <a href="/activity/<?=$row['id'];?>" class="c-black mb-1"><?=$row['activities_title'];?></a>
                                    </div>
                                    <div class="body">
                                    </div>
                                    <hr>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <?= $this->include("{$template}/common/footer") ?>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>
