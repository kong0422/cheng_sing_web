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
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h3>承興國際展覽</h3>
                            <p>
                                地址：台北市士林區中正路118-1號4樓
                                <br>廠商洽詢：02-2881-4888
                                <br>民眾洽詢：02-5576-9088
                                <br>傳真電話：02-2831-7729
                            </p>
                        </div>
                        <div class="col-12 mb-4">
                            <h3 class="mb-4">線上客服</h3>
                            <div class="row">
                                <div class="col-auto">
                                <a href="https://www.facebook.com/babymamacs">
                                    <p class="icon-bg m-auto icon-fb"><img src="/assets/img/icon-solid-fb.svg" alt class="w-100" style="max-width: 50px;"></p>
                                    <p style="font-size: 12px;">FB粉絲專頁</p>
                                </a>
                                </div>
                                <div class="col-auto">
                                <a href="https://lin.ee/8rrI5YW">
                                    <p class="icon-bg m-auto icon-line"><img src="/assets/img/icon-solid-line.svg" alt class="w-100" style="max-width: 50px;"></p>
                                    <p style="font-size: 12px;">Line官方帳號</p>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <h3>關於承興</h3>
                            <p>我們在展覽活動上追求廠商與消費者利潤最大化，從微不足道的細節開始，注入有別以往的創意，經過嶄新且有效的行銷活動聚焦於展出主題，確實讓廠商得到正面宣傳，消費者獲得正確資訊，進而滿足雙方需求。我們期以不斷創新與不變的堅持來維護每檔展出品質。</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-8">
                        <form id="contact_form" method="post">
                            <input type="hidden" name="google_recaptcha_token" value="">
                            <input type="hidden" name="url" value="<?=$website_url;?>">
                            <div class="form-wrapper">
                                <div class="form-row align-items-center">
                                    <div class="form-group col-md-6"><input type="name" name="name" placeholder="姓名*" required="required" value="" class="form-control"></div>
                                    <div class="form-group col-md-6 d-flex pl-sm-5 justify-content-center">
                                        <div class="form-check form-check-inline col-auto pr-5 m-0"><input type="radio" name="sex" id="sex-man" value="先生" required="required" class="form-check-input"> <label for="check-man" class="form-check-label">先生</label></div>
                                        <div class="form-check form-check-inline col-auto m-0"><input type="radio" name="sex" id="sex-woman" value="小姐" required="required" class="form-check-input"> <label for="check-woman" class="form-check-label">小姐</label></div>
                                    </div>
                                    <div class="form-group col-md-6"><input type="email" name="email" placeholder="電子郵件*" required="required" value="" class="form-control"></div>
                                    <div class="form-group col-md-6"><input type="tel" name="phone" placeholder="會員手機*" required="required" value="" class="form-control"></div>
                                    <div class="form-group col-md-12"><textarea name="content" placeholder="詢問內容* 提醒您，若您填寫得越精準，越有利我們及時回覆給您資訊。" class="form-control" style="min-height: 200px;"></textarea></div>
                                    <p class="px-3 mt-2 mb-4">我們不會將您輸入的任何個人信息用於回答查詢以外的目的，此外，我們將根據個人資料保護法第六條，妥善管理您的個人信息。您亦可<a href="/privacy" class="c-blue">點擊這裡</a>查看更多關於承興提供的隱私權保護政策。
                                    請您務必將承興的電子郵件地址或域名設置為可接收的電子郵件，以免錯過我們的回覆。
                                    </p>
                                </div>
                                <div class="row m-0 justify-content-center justify-content-md-between align-items-center">
                                    <div class="col-auto mb-4 text-center">
                                        <div id="grecaptcha" data-theme="light"></div>
                                    </div>
                                    <div class="col-auto mb-4">
                                        <button type="button" class="btn btn-pink px-5 float-md-right" style="height: 44px;letter-spacing: 2px;">送出訊息</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?= $this->include("{$template}/common/footer") ?>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src='https://www.google.com/recaptcha/api.js?render=explicit'></script>
<script>
var is_disable = false;
var google_recaptcha_token = null;
$(function(){
    $('#contact_form button').on('click', function(){
        send();
    });

    setTimeout(() => {
        window.grecaptcha.render("grecaptcha", {
            sitekey: '<?=$google_recaptcha_key;?>',
            size:20,
            callback: callbackGoogleToken()
        });
    }, 200);

});
var callbackGoogleToken = function(token){
    google_recaptcha_token = token;
}
var send = function() {
    is_disable = true;
    if (google_recaptcha_token == ''){
        alert('請先驗證我不是機器人!')
    } else {
        const url = '<?=$api_url;?>contact'
        $.ajax({
            type: 'POST',
            url: url,
            data: $('#contact_form').serialize(),
            success: function(res) {
                console.log(res)
                if (res.data.code == 2){
                    alert(res.msg)
                    $('#contact_form [name=name]').val();
                    $('#contact_form [name=sex]:checked').prop('checkec', false);
                    $('#contact_form [name=email]').val();
                    $('#contact_form [name=phone]').val();
                    $('#contact_form [name=content]').val();
                } else if (res.code == 3){
                    alert(res.msg)
                }else{
                    alert('認證失敗!')
                }
            },
            error: function(res) {
                console.log(res)
                alert('認證失敗!')
            }
        });
    }
    is_disable = false;
}
</script>
<?= $this->endSection() ?>
