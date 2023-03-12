<footer class="footer">
    <div class="container pt-4">
        <div class="row">
            <div class="col-12">
                <div class="navbar-logo ">
                    <a href="/" class="navbar-brand">
                        <img src="/assets/img/BMlogo.svg" alt="" style="width: 250px;"></a>
                </div>
            </div>
        </div>
        <div class="row row-footer-main">
            <div class="col-md-4 col-left">
                <div class="text-box">
                    <h3>展覽位置</h3>
                    <p class="c-lightgrey mt-4 lh-1_6 white-space text-wrap">
                        展覽地點：<?=$locations[$exhibition['exhibition_classes_area'].$exhibition['exhibition_classes_location']];?>
                        <br>展館地址：<?=$exhibition['exhibition_classes_address'];?>
                        <br>展覽時間：<?=$exhibition['exhibitions_sdate'];?> ~ <?=$exhibition['exhibitions_edate'];?>
                        <br>主辦單位：承興國際展覽
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-center">
                <div class="container">
                    <div class="row">
                        <div class="col-6 text-center mb-4">
                            <a href="https://www.cheng-sing.com/">
                                <img src="/assets/img/icon-logo.svg" alt="" class="mb-2" style="width: 67px;">
                                <p class="c-lightgrey">承興展覽</p>
                            </a>
                        </div>
                        <div class="col-6 text-center mb-4">
                            <a href="<?=$exhibition['exhibition_classes_fblink'];?>" target="_blank">
                                <img src="/assets/img/icon-fb.svg" alt="" class="mb-2" style="width: 67px;">
                                <p class="c-lightgrey">FB粉絲專頁</p>
                            </a>
                        </div>
                        <div class="col-6 text-center mb-4">
                            <a href="<?=$exhibition['exhibition_classes_sharelink'];?>">
                                <img src="/assets/img/icon-link.svg" alt="" class="mb-2" style="width: 67px;">
                                <p class="c-lightgrey">好站分享</p>
                            </a>
                        </div>
                        <div class="col-6 text-center mb-4">
                            <a href="<?=$exhibition['exhibition_classes_linelink'];?>" target="_blank">
                                <img src="/assets/img/icon-line.svg" alt="" class="mb-2" style="width: 67px;">
                                <p class="c-lightgrey">Line官方帳號</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-right">
                <?=$exhibition['exhibition_classes_fbcontent'];?>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 pb-md-1 pb-5">
        <div class="w-100 text-center">
            <hr style="border-top: 2px solid rgba(255, 255, 255, 0.8);">
            <p class="c-lightgrey">Copyright © 2018 承興國際展覽有限公司(CHENG SING International Exhibition Co., Ltd). All Rights Reserved.</p>
        </div>
    </div>
    <div class="container-fluid px-0 position-fixed d-block d-md-none" style="bottom: 0px; left: 0px; z-index: 1;">
        <div class="wrapper bg-pink py-2">
            <div class="row m-0">
                <div class="col px-1">
                    <div class="line-btn position-relative w-100">
                        <div class="img-box position-absolute">
                            <img src="/assets/img/line-share.svg" alt="" class="w-100 h-100">
                        </div>
                        <div class="outer-line-it-button" style="opacity: 0;">
                            <div class="line-it-button" data-lang="zh_Hant" data-type="share-a" data-ver="3" data-url="http://google.com" data-color="default" data-size="large" data-count="false" style="display: none;"></div>
                        </div>
                    </div>
                    <!-- <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script> -->
                </div>
                <div class="col px-1">
                    <div class="fb-btn position-relative w-100">
                        <div class="img-box">
                            <img src="/assets/img/fb-share.svg" alt="" class="w-100 h-100">
                        </div>
                        <div class="fb-share-button position-absolute" data-href="https://google.com/" data-layout="button" data-size="large">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fyahoo.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                                Share
                            </a>
                        </div>
                    </div>
                    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="C8cwYAHa"></script> -->
                </div>
                <div class="col px-1">
                    <a href="<?=$exhibition['exhibition_classes_linelink'];?>" target="_blank">
                        <div class="img-box"><img src="/assets/img/line-friend.svg" alt="" class="w-100 h-100"></div>
                    </a>
                </div>
                <div class="col px-1">
                    <a href="<?=$exhibition['exhibition_classes_fblink'];?>" target="_blank">
                        <div class="img-box"><img src="/assets/img/fb-fans.svg" alt="" class="w-100 h-100"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<scr
