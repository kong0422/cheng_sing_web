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

        <section class="latest-news-main-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 text-center">
                        <h3 class="">最新消息</h3>
                        <hr>
                    </div>
                </div>
                <div class="row mt-5 justify-content-start">
                    <?php
                        foreach ($news_list as $index => $row) {
                            if ($index % 3 == 0) {
                                $color = 'yellow';
                            } elseif ($index % 3 == 1) {
                                $color = 'red';
                            } elseif ($index % 3 == 2) {
                                $color = 'skyblue';
                            }
                    ?>
                    <div class="col-md-4 px-1 mb-4">
                        <div class="bd-<?=$color;?> d-flex flex-column align-items-center py-5 px-3 h-100">
                            <img src="/assets/img/ln08.svg" alt="<?=$row['news_title'];?>" class="w-20 bg-<?=$color;?> mb-4">
                            <span class="d-h5 c-<?=$color;?>">[一般]</span>
                            <h5 class="mb-3 c-<?=$color;?>"><?=$row['news_title'];?></h5>
                            <p class="mb-3 text-truncate-3 c-<?=$color;?>">
                                <?=strip_tags($row['news_content']);?>
                            </p>
                            <a href="/news/<?=$row['id'];?>" class="btn btn-<?=$color;?>-bd rounded-pill px-4">
                                <?=$row['news_url_name'];?>
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
