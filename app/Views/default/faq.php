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

        <section class="faq">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-12 p-0 text-center">
                        <h3 class="">常見Q&A</h3>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-lg-2">
                        <a href="#member" class="btn-red py-3 mb-3 w-100 d-block text-center">會員資訊篇</a>
                    </div>
                    <div class="col-6 col-lg-2">
                        <a href="#enter" class="btn-skyblue py-3 mb-3 w-100 d-block text-center">入場篇</a>
                    </div>
                    <div class="col-6 col-lg-2">
                        <a href="#activity" class="btn-yellow py-3 mb-3 w-100 d-block text-center">大會活動篇</a>
                    </div>
                    <div class="col-6 col-lg-2">
                        <a href="#live" class="btn-green py-3 mb-3 w-100 d-block text-center">現場服務/活動篇</a>
                    </div>
                    <div class="col-6 col-lg-2">
                        <a href="#info" class="btn-purple2 py-3 mb-3 w-100 d-block text-center">平面圖／場刊篇</a>
                    </div>
                    <div class="col-6 col-lg-2">
                        <a href="#exhi" class="btn-heavypink py-3 mb-3 w-100 d-block text-center">展覽相關資訊篇</a>
                    </div>
                    <div class="col-12 my-4">
                        <p class="text-center">以下資訊若無法解決您的問題，歡迎隨時<a class="c-blue" href="/contact">聯絡承興展覽</a></p>
                    </div>
                </div>
                <div class="wrapper-faq">
                    <div class="row">
                        <a class="anchor" id="member"></a>
                        <div class="col-12">
                            <p class="px-4 py-1 my-3 bg-red c-white">會員資訊篇</p>
                        </div>
                    </div>
                    <div class="row-group-faq">
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">註冊會員後在會員專區出現的「會員QRCODE」有什麼用？</h3>
                                <p class="answer">「會員QRCODE」就是您的專用識別，只要是本公司主辦的展覽，報名任何索票、活動後，通通只要使用「會員QRCODE」就可以現場報到或參加活動！不用再出示一堆email或簡訊喔！</p>
                            </div>
                        </div>
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">會員註冊時email打錯了，從哪裡能修改？</h3>
                                <p class="answer">因為email就是帳號，所以無法修改，請重新以正確的email註冊即可。</p>
                            </div>
                        </div>
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">我有加入會員，就可以參加展期各項活動嗎？</h3>
                                <p class="answer">不是喔，登入會員後還需要到各項活動的報名頁面報名喔。</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a class="anchor" id="enter"></a>
                        <div class="col-12">
                            <p class="px-4 py-1 my-3 bg-skyblue c-white">入場篇</p>
                        </div>
                    </div>
                    <div class="row-group-faq">
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">婦幼展憑媽媽／寶寶手冊可以免費入場嗎？</h3>
                                <p class="answer">孕媽咪憑媽媽手冊，孕媽咪及陪同親友一人可免費入場。<br>持寶寶手冊可兩大人免費入場。</p>
                            </div>
                        </div>
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">只要出示「會員QRCODE」就可以免費入場嗎？</h3>
                                <p class="answer">「會員QRCODE」不可免費入場，請完成各展覽的索票。</p>
                            </div>
                        </div>
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">寵物可以帶進場嗎？</h3>
                                <p class="answer">寵物不落地，要麻煩把毛小孩裝進推車或外出提袋喔。</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a class="anchor" id="activity"></a>
                        <div class="col-12">
                            <p class="px-4 py-1 my-3 bg-yellow c-white">大會活動篇</p>
                        </div>
                    </div>
                    <div class="row-group-faq">
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">資料填好也送出了，要怎麼知道我有沒有報名成功？</h3>
                                <p class="answer">可以到「會員專區」→「活動報名紀錄」查看，有紀錄的話就是有報名成功喔。</p>
                            </div>
                        </div>
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">不小心報錯場次可以更改嗎？臨時有事怎麼取消報名？</h3>
                                <p class="answer">請至「會員專區」→「活動報名紀錄」取消已報場次，再至原活動頁面重新報名即可。需留意一旦取消報名名額將釋出，無法保留名額哦！</p>
                            </div>
                        </div>
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">報名資料不小心填錯了！怎麼修改？</h3>
                                <p class="answer">請至「會員專區」→「會員資料」修改會員資料。請特別注意：若活動要求現場核對證件，報名資料與證件不符將不予兌換、參加活動喔。</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a class="anchor" id="live"></a>
                        <div class="col-12">
                            <p class="px-4 py-1 my-3 bg-green c-white">現場服務/活動篇</p>
                        </div>
                    </div>
                    <div class="row-group-faq">
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">有推車／輪椅可以租借嗎？有會場尋人廣播／遺失物招領等服務嗎？</h3>
                                <p class="answer">以上服務內容依各展覽館而定，請洽服務台。</p>
                            </div>
                        </div>
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">現場活動報到後就直接前往舞台區／贈品處／各廠商攤位進行嗎？</h3>
                                <p class="answer">報到後將提供各種號碼牌、兌換券或參加券，請依照上面標示的時間前往指定區域，若無標示時間，就是展期間皆可前往喔！</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a class="anchor" id="info"></a>
                        <div class="col-12">
                            <p class="px-4 py-1 my-3 bg-purple c-white">平面圖／場刊篇</p>
                        </div>
                    </div>
                    <div class="row-group-faq">
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">大展有平面圖或場刊嗎？怎麼索取？</h3>
                                <p class="answer">平面圖或場刊的製作每展不盡相同，但皆可在服務台索取。
                                    <br>▶若有開放線上索取，記得至「會員專區」→「會員資料」詳填收件地址，不齊者一律不予寄發。
                                    <br>▶若有提供電子版，以手機出示或列印紙本皆可使用，同享所有優惠。
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a class="anchor" id="exhi"></a>
                        <div class="col-12">
                            <p class="px-4 py-1 my-3 bg-heavypink c-white">展覽相關資訊篇</p>
                        </div>
                    </div>
                    <div class="row-group-faq">
                        <div class="row mt-3 mx-0">
                            <div class="col p-0 content">
                                <h3 class="question">參展廠商什麼時候公布？有哪些優惠？</h3>
                                <p class="answer">參展品牌將陸續在「參與廠商」公布，各項優惠將依類別在網頁中公開，請密切注意網頁資訊！</p>
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
<script src="https://apis.google.com/js/platform.js?onload=loadAuthClient" async defer></script>
<script>
$(function(){
    $('#contact_form button').on('click', function(){
        send();
    });

});
var send = function() {
    alert('send')
    // const vm = this
    // vm.isDisable = true
    // if (vm.google_recaptcha_token==''){
    //     alert('請先驗證我不是機器人!')
    // }else{
    //     axios.post(process.env.apiUrl+'contact', {
    //         google_recaptcha_token: vm.google_recaptcha_token,
    //         name: vm.name,
    //         sex: vm.sex,
    //         email: vm.email,
    //         phone: vm.phone,
    //         content: vm.content,
    //         url:process.env.webUrl
    //     })
    //     .then(function (response) {
    //         console.log(response)
    //         if (response.data.code==2){
    //             alert(response.data.msg)
    //             vm.name=""
    //             vm.sex=""
    //             vm.email=""
    //             vm.phone=""
    //             vm.content=""
    //         }else if (response.data.code==3){
    //             alert(response.data.msg)
    //         }else{
    //             alert('認證失敗!')
    //         }
    //     })
    //     .catch(function (response) {
    //         console.log(response)
    //         alert('認證失敗!')
    //     })
    // }
    // vm.isDisable = false
}
</script>
<?= $this->endSection() ?>
