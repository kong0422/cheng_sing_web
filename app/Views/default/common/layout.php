<!DOCTYPE html>
<!--[if IE 9]><html lang="en-US" class="lt-ie9 ie9" data-n-head-ssr lang="zh-TW" data-n-head="%7B%22lang%22:%7B%22ssr%22:%22zh-TW%22%7D%7D"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="zh-TW">
<!--<![endif]-->
    <head>
        <title><?=$meta['title'];?></title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta data-hid="description" name="description" content="<?=$meta['description'];?>">
        <meta data-hid="keywords" name="keywords" content="<?=$meta['keywords'];?>">

        <!-- <meta property="og:title" content=""> -->
        <!-- <meta property="og:description" content=""> -->
        <!-- <meta property="og:url" content=""> -->

        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/assets/css/flickity.min.css">
        <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"> -->
        <link rel="stylesheet" href="/assets/css/style.css">
        <script src="/assets/js/jquery-3.5.1.js"></script>
    </head>

    <body cz-shortcut-listen="true">
        <?php
            if (isset($exhibition['exhibition_classes_google_gtm'])) {
                echo $exhibition['exhibition_classes_google_gtm'];
            }
        ?>

        <?= $this->renderSection('content') ?>
    </body>

    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/jQueryUI-1.10.4.js"></script>
    <script src="/assets/js/carousel.drag.js"></script>
    <script src="/assets/json/AllNewsColorsData.json"></script>
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <script src="/assets/js/qrcode.min.js"></script>
    <?= $this->renderSection('javascript') ?>
    <script src="/assets/js/script.js"></script>
    <!-- <script src="/assets/js/my.js"></script> -->
</html>
