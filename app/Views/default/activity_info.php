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
        <section class="content-page activity-content activity-content-before-login">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-12 pl-md-0">
                        <!-- <h1 class="h3 text-center mb-4"><?=$activity['activities_title'];?></h1> -->
                        <div class="img-box mb-4">
                            <img src="<?="{$storage_url}pic/{$activity['activities_pic']}";?>" alt="" class="w-100">
                        </div>
                        <div class="content">
                            <?=$activity['activities_description'];?>
                        </div>
                        <div class="apply-info">
                            <!-- <a href="javascript:;" @click="login" class="btn btn-pink px-5 py-3 mb-4" style="border-radius: 8px;">請先登入</a> -->
                            <!-- <p class="c-red">若未登入才會出現此按鈕，點擊後進入登入畫面，登入後直接跳轉下個頁面</p> -->
                            <?php if ($activity_sub_list) { ?>
                            <table class="table table-apply mb-5">
                                <?php foreach ($activity_sub_list as $index => $row) { ?>
                                <tbody>
                                    <thead>
                                        <tr>
                                            <th colspan="3" style="border-top:0px;border-bottom:0px;"><?=$row['activity_subs_name'];?></th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td scope="row"><?=$row['activity_subs_session'];?></td>
                                        <td>
                                            <span class="mr-3">
                                                <?=substr($row['activity_subs_stime'], 0, 10);?>
                                                <span style="background-color:yellow;border-style:solid;border-radius:10px;border-color:#FFD306">
                                                    <?=substr($row['activity_subs_stime'], 11, 16);?>
                                                </span>
                                                    ～
                                                <?=substr($row['activity_subs_etime'], 0, 10);?>
                                                <span style="background-color:yellow;border-style:solid;border-radius:10px;border-color:#FFD306">
                                                    <?=substr($row['activity_subs_etime'], 11, 16);?>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <?php if (!$row['activity_limit']) { ?>
                                            <div class="apply-tag vacancy" style="background-color:white;">
                                                <?=$row['activity_limitName'];?>
                                            </div>
                                            <?php } else { ?>
                                            <div class="apply-tag full">
                                                <?=$row['activity_limitName'];?>
                                            </div>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                            <?php } ?>

                            <!-- <a href="javascript:;" @click="login" class="btn btn-pink px-5 py-3 mb-4" style="border-radius: 8px;">請先登入</a> -->
                            <center>
                                <?php if ($ticket_event_url) { ?>
                                <!-- <iframe src="<?=$ticket_event_url;?>?iframe=1" height="700" width="100%" style="border: 0px solid #ccc;"></iframe> -->
                                <a href="<?=$ticket_event_url;?>" class="btn btn-pink px-5 py-3 mb-4" style="border-radius: 8px;">立即報名</a>
                                <?php } else { ?>
                                <a href="javascript.void();" class="btn btn-grey px-5 py-3 mb-4" style="border-radius: 8px;">請先設定票券系統活動報名網址</a>
                                <?php } ?>
                            </center>
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
