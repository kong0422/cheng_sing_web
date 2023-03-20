<?= $this->extend("{$template}/common/layout") ?>

<?= $this->section('css') ?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <?= $this->include("{$template}/common/header") ?>
    <div class="main">
        <section class="index-carousel">
            <div class="container">
                <div class="js-slideshowIndex">
                    <?php foreach ($home['banner'] as $row) { ?>
                    <?php
                        $banner_position = '';
                        switch ($row['banners_position']) {
                            case '置中':
                                $banner_position = 'center';
                                break;
                            case '靠左':
                                $banner_position = 'left';
                                break;
                            case '靠右':
                                $banner_position = 'right';
                                break;

                        }
                    ?>
                    <div class="slide">
                        <a href="<?=$row['banners_url'];?>">
                            <img src="<?="{$storage_url}pic/{$row['banners_pic']}";?>" alt="">
                            <div class="index-title <?=$banner_position;?>">
                            <h2 class="h4 mb-4"><?=$row['banners_subtitle'];?></h2>
                                <h1 class="mb-4" v-html="$options.filters.tobr(item.banners_title)"></h1>
                                <h1 class="mb-4">
                                    <?=strip_tags($row['banners_title']);?>
                                </h1>
                                <p>
                                    <?=strip_tags($row['banners_content']);?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>

                <div class="js-slideshowIndex-mob">
                    <?php foreach ($home['banner'] as $row) { ?>
                    <?php
                        $banner_position = '';
                        switch ($row['banners_position']) {
                            case '置中':
                                $banner_position = 'center';
                                break;
                            case '靠左':
                                $banner_position = 'left';
                                break;
                            case '靠右':
                                $banner_position = 'right';
                                break;

                        }
                    ?>
                    <div class="slide">
                        <a href="<?=$row['banners_url'];?>">
                            <img src="<?="{$storage_url}pic/{$row['banners_pic']}";?>" alt="">
                            <div class="index-title <?=$banner_position;?>">
                                <h2 class="h4 mb-2"><?=$row['banners_subtitle'];?></h2>
                                <h1 class="mb-2">
                                    <?=strip_tags($row['banners_title']);?>
                                </h1>
                                <p>
                                    <?=strip_tags($row['banners_content']);?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </section>
        <section class="color-block">
            <div class="container">
                <div class="row">
                    <?php foreach ($home['main'] as $row) { ?>
                    <div class="col-md-6" v-for="(item, index) in main" :key='index'>
                        <div class="row">
                            <div class="col-md-6 p-0">
                                <img src="<?="{$storage_url}pic/{$row['pic']}";?>" alt="<?=$row['activities_title'];?>" class="w-100">
                            </div>
                            <div class="col-md-6 p-0 el-color-block" style="background-color: <?=$row['color'];?>;">
                                <p class="c-white"><?=$row['activities_subtitle'];?></p>
                                <h2 class="c-white"><?=$row['activities_title'];?></h2>
                                <a href="/activity/<?=$row['activities_id'];?>" class="btn btn-white rounded-pill px-4 b-hover-white">我要預約</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 p-0"><img :src="picUrl+'pic/'+ index.pic1" alt="" class="w-100"></div>
                            <div class="col-md-6 p-0 el-color-block" :style="{'background-color':index.color1}">
                                <p class="c-white">{{ index.activities_subtitle1 }}</p>
                                <h2 class="c-white">{{ index.activities_title1 }}</h2>
                                <a :href="'activity-content-step-1/'+index.activities_id1"
                                    class="btn btn-white rounded-pill px-4 b-hover-white">我要預約</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 p-0"><img :src="picUrl+'pic/'+ index.pic2" alt="" class="w-100"></div>
                            <div class="col-md-6 p-0 el-color-block" :style="{'background-color':index.color2}">
                                <p class="c-white">{{ index.activities_subtitle2 }}</p>
                                <h2 class="c-white">{{ index.activities_title2 }}</h2>
                                <a :href="'activity-content-step-1/'+index.activities_id2"
                                    class="btn btn-white rounded-pill px-4 b-hover-white">我要預約</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 p-0"><img :src="picUrl+'pic/'+ index.pic3" alt="" class="w-100"></div>
                            <div class="col-md-6 p-0 el-color-block" :style="{'background-color':index.color3}">
                                <p class="c-white">{{ index.activities_subtitle3 }}</p>
                                <h2 class="c-white">{{ index.activities_title3 }}</h2>
                                <a :href="'activity-content-step-1/'+index.activities_id3"
                                    class="btn btn-white rounded-pill px-4 b-hover-white">我要預約</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 p-0"><img :src="picUrl+'pic/'+ index.pic4" alt="" class="w-100"></div>
                            <div class="col-md-6 p-0 el-color-block" :style="{'background-color':index.color4}">
                                <p class="c-white">{{ index.activities_subtitle4 }}</p>
                                <h2 class="c-white">{{ index.activities_title4 }}</h2>
                                <a :href="'activity-content-step-1/'+index.activities_id4"
                                    class="btn btn-white rounded-pill px-4 b-hover-white">我要預約</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 p-0"><img :src="picUrl+'pic/'+ index.pic5" alt="" class="w-100"></div>
                            <div class="col-md-6 p-0 el-color-block" :style="{'background-color':index.color5}">
                                <p class="c-white">{{ index.activities_subtitle5 }}</p>
                                <h2 class="c-white">{{ index.activities_title5 }}</h2>
                                <a :href="'activity-content-step-1/'+index.activities_id5"
                                    class="btn btn-white rounded-pill px-4 b-hover-white">我要預約</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 p-0"><img :src="picUrl+'pic/'+ index.pic6" alt="" class="w-100"></div>
                            <div class="col-md-6 p-0 el-color-block" :style="{'background-color':index.color6}">
                                <p class="c-white">{{ index.activities_subtitle6 }}</p>
                                <h2 class="c-white">{{ index.activities_title6 }}</h2>
                                <a :href="'activity-content-step-1/'+index.activities_id6"
                                    class="btn btn-white rounded-pill px-4 b-hover-white">我要預約</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="container-fluid" style="background-image: url(<?="{$storage_url}pic/{$home['dividePic']['pic']}";?>); background-size: cover;">
                <!-- <div class="row">
                    <img src="img/bg01.png" alt="" class="w-100 bg01">
                </div> -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 p-0"></div>
                                <div class="col-md-6 p-0"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 p-0 bg-yellow d-flex-abcenter flex-column el-color-block2">
                                    <?php if (isset($home['ticketIndex']['activity_id'])) { ?>
                                    <a href="/activity/<?=$home['ticketIndex']['activity_id'];?>" class="text-center s-hover w-100">
                                        <img src="img/img-vip.svg" alt="" class="mb-4" style="width: 40%;height: auto;">
                                        <h2 class="c-white">會員免費索票</h2>
                                    </a>
                                    <?php } else { ?>
                                    <a href="javascript: void(0);" class="text-center s-hover w-100">
                                        <img src="img/img-vip.svg" alt="" class="mb-4" style="width: 40%;height: auto;">
                                        <h2 class="c-white">未設定索票</h2>
                                    </a>
                                    <?php }  ?>
                                </div>
                                <div class="col-md-6 p-0 bg-red d-flex-abcenter flex-column el-color-block2">
                                    <a href="<?=$ticket_member_url;?>" class="text-center s-hover w-100">
                                        <img src="img/img-click.svg" alt="" class="mb-4" style="width: 40%;height: auto;">
                                        <h2 class="c-white">加入會員</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="all-news" v-show="activity!=''">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 text-center">
                        <h3 class="">所有消息</h3>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($home['activity'] as $row) { ?>
                    <div class="col-md-2 col-all-news" v-for="(item, index) in activity" :key='index'>
                    <a href="/activity/<?=$row['id'];?>" class="s-hover">
                            <span>
                                <img src="/assets/img/<?=$row['activities_icon1'];?>" alt="<?=$row['activities_title'];?>" class="mb-3">
                            </span>
                            <p><?=$row['activities_title'];?></p>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="latest-news" v-show="news!=''">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 text-center">
                        <h3 class="">最新消息</h3>
                        <hr>
                    </div>
                </div>
                <div class="row mt-5 justify-content-start">
                    <?php
                        foreach ($home['news'] as $index => $row) {
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
                            <a href="<?="/news/{$row['id']}";?>" class="btn btn-<?=$color;?>-bd rounded-pill px-4">
                                <?=$row['news_url_name'];?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="activity" v-show="moms!='' || babies!=''">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 text-center">
                        <h3 class="">大會活動</h3>
                        <hr>
                    </div>
                </div>
                <div class="row row-mommy" v-show="moms!=''">
                    <div class="col-md-3 col-sm-6 col-top-flag">
                        <!-- <img src="/assets/img/img-activity-mommy.png" alt=""> -->
                        <img src="<?="{$storage_url}pic/{$exhibition['exhibition_classes_activity_pic1']}";?>" alt="">
                    </div>
                    <?php foreach ($home['moms'] as $row) { ?>
                    <div class="col-md-3 col-sm-6">
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
                <div class="row row-baby" v-show="babies!=''">
                    <div class="col-md-3 col-sm-6 col-top-flag">
                        <!-- <img src="assets/img/img-activity-baby.png" alt=""> -->
                        <img src="<?="{$storage_url}pic/{$exhibition['exhibition_classes_activity_pic2']}";?>" alt="">
                    </div>
                    <?php foreach ($home['babies'] as $row) { ?>
                    <div class="col-md-3 col-sm-6">
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

        <section class="vendor">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 text-center">
                        <h3 class="">參與廠商</h3>
                        <hr>
                    </div>
                </div>
                <div class="row  vendor-group">
                    <?php foreach ($home['vendor'] as $row) { ?>
                    <div class="col-md-2">
                        <div class="img-box w-100">
                            <a href="<?="{$website_url}vendor/{$row['id']}";?>">
                                <img src="<?="{$storage_url}vendor/{$row['vendors_logo']}";?>" alt="<?=$row['vendors_name'];?>" class="w-100 vendor-obj">
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <div class="other-exhibition" v-show="exhibitions!=''">
            <div class="container mb-4">
                <div class="row">
                    <div class="col-12 p-0 text-center">
                        <h3 class="">其他展覽</h3>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="js-slideshowOtherExhi swiper-container">
                        <div class="swiper-wrapper">
                            <?php foreach ($home['exhibitions'] as $row) { ?>
                            <div class="swiper-slide" style="width: 220px;">
                            <a href="<?=$row['exhibition_classes_url'];?>">
                                    <div class="wrapper flex flex-column border border-secondary mx-auto overflow-hidden" style="width: 200px;">
                                        <div class="img-box bg-verylightgrey" style="width: 200px; height: 150px;">
                                            <img src="<?="{$storage_url}pic/{$row['exhibitions_file']}";?>" alt="<?=$row['exhibitions_name'];?>" class="w-100 h-100" style="object-fit: cover;">
                                        </div>
                                        <p class="title mb-0 text-center text-truncate"><?=$row['exhibitions_name'];?></p>
                                        <p class="date mb-0 text-center text-truncate"><?=$row['exhibitions_sdate'];?> ~ <?=$row['exhibitions_edate'];?></p>
                                        <p class="content mb-0 text-center text-truncate">
                                            <?=$locations[$row['exhibition_classes_area'].$row['exhibition_classes_location']];?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if (isset($home['popup']['status']) && $home['popup']['status'] == '打開' ) { ?>
        <section class="popup position-fixed w-100 h-100">
            <div class="over-lay w-100" style="background-color: rgba(0, 0, 0, 0.65);"></div>
            <div class="popup-wrapper position-absolute row m-0">
                <div class="d-flex flex-column flex-sm-row mx-auto">
                    <div class="row order-2 order-sm-1">
                        <div class="col-12 h-100">
                            <div class="img-box w-100 h-100">
                                <img src="<?="{$storage_url}pic/{$home['popup']['pic']}";?>" alt="" class="w-100 h-100" style="object-fit: contain;">
                            </div>
                        </div>
                    </div>
                    <div class="block btn-cross order-1 order-sm-2 ml-0 ml-sm-3 mb-3 mb-sm-0 align-self-end align-self-sm-start">
                        <div class="img-box">
                            <img src="/assets/img/icon-cross.svg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>

    </div>
    <?= $this->include("{$template}/common/footer") ?>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
<?php if ($jsonld) { ?>
<script type="application/ld+json">
    <?=$jsonld;?>
</script>
<?php } ?>
<?= $this->endSection() ?>
