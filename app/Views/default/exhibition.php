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
        <section class="exhibition-info">
            <div class="container container-narrow">
                <?=$exhibition['exhibition_classes_info'];?>
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
