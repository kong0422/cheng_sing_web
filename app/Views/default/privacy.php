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
        <section class="privacy">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="member-login-panel-wrapper p-3" style="max-width: 1100px;">
                            <div class="container-fluid">
                                <div class="form-switch d-flex flex-column position-relative">
                                    <div class="row">
                                        <h4 class="m-auto" style="color: #333333;">隱私權條款</h4>
                                    </div>
                                    <p>歡迎您來到承興國際展覽網站（以下簡稱本網站），承興遵守「電腦處理個人資料保護法」，並重視您的隱私權，為了確保您的個人資料安全，讓您能夠安心使用本網站的各項服務與資訊，我們訂立了以下的隱私權政策，請您詳細閱讀以了解本網站如何蒐集、應用、保護您的資料。
                                    <br><br>
                                    一、隱私權保護政策的適用範圍隱私權保護政策內容，包括本網站如何處理在您使用網站服務時收集到的個人識別資料。隱私權保護政策不適用於本網站以外的相關連結網站，也不適用於非本網站所委託或參與管理的人員。
                                    <br><br>
                                    二、個人資料的蒐集、處理及利用方式當您在本網站加入會員等網站活動或服務時，我們將視業務或活動性質請您提供必要的個人資料，並在該特定目的範圍內處理及利用。非經您書面同意，本網站不會將個人資料用於其他用途。於一般瀏覽時，伺服器會自行記錄相關行徑，包括您使用連線設備的IP位址、使用時間、使用的瀏覽器、瀏覽及點選資料記錄等，做為我們增進網站服務的參考依據，此記錄為內部應用，絕不對外公佈。 為提供精確的服務，我們會將收集的問卷調查內容進行統計與分析，分析結果之統計數據或說明文字呈現，除供內部研究外，我們會視需要公佈統計數據及說明文字，但不涉及特定個人之資料。
                                    <br><br>
                                    三、與第三方共用個人資料之政策本網站絕不會提供、交換、出租或出售任何您的個人資料給其他個人、團體、私人企業或公務機關，但有法律依據或合約義務者，不在此限。我們將在下列原則下，與第三人共用您的個人資料：法律明文規定。提供您服務或有利於您的權益，需與提供服務的第三方共用資料時。我們將在服務或活動中充分說明並通知，您可以選擇是否接受。與公務機關或學術研究機構合作，基於統計或學術研究而有必要，且資料經過提供者處理或蒐集著依其揭露方式無從識別特定之當事人。當您在網站的行為，違反服務條款或可能損害或妨礙網站與其他使用者權益或導致任何人遭受損害時，經網站管理單位研析揭露您的個人資料是為了辨識、聯絡或採取法律行動所必要者。本網站委託廠商協助蒐集、處理或利用您的個人資料時，將對委外廠商或個人善盡監督管理之責。
                                    <br><br>
                                    <span style="color:red;">四、刪除您的會員帳號後，您將遺失該帳戶中的所有資料和內容，例如已綁定的帳號、檔案、相關票券、抽獎獎項等，且無法透過該帳戶進行相關服務，此操作為不可逆。若需刪除帳戶請由網站上方功能項目點選「聯絡我們」展開頁面後，選擇您方便的方式 與我們的客服聯繫並說明刪除帳號的需求。</span>
                                    <br><br>
                                    五、Cookie 的使用Cookie 是網站在您瀏覽網頁時，儲存在您電腦中的資料，讓網頁伺服器能辨識使用者、儲存使用者瀏覽該網站時的各種偏好設定，例如位置、語言、個人識別資訊，但僅限於您確實輸入過的內容，無法自行存取您未提供的資料或檔案。日後，您再度瀏覽網站時，該網站便能依據 Cookie 資料來判斷使用者，以提供符合您喜好及需求的資訊。為了提供您更個人化的服務或統計瀏覽行為的目的，本網站會在您的電腦中放置並取用 Cookie，若您不願接受 Cookie 的寫入，您可在您使用的瀏覽器功能項中設定隱私權等級為高，即可拒絕 Cookie 的寫入，但可能會導至網站某些功能無法正常執行 。
                                    <br><br>
                                    六、隱私權保護政策修訂 本網站隱私權保護政策將因應需求隨時進行修正，修正後的條款將刊登於網站上。
                                    <br><br>
                                    七、免責聲明
                                    <br><br>
                                    <ul style="list-style:none;color:red;"><li>
                                    7.1 無須對使用者活動負責
                                    承興國際展覽有限公司及本網站對任何使用者於本網站上之行為概不負責，亦無須對因該使用者之行為而致使任何人遭受之損害負責。
                                    <br><br>
                                    </li><li>
                                    7.1 無須對使用者提供之資料負責
                                    承興國際展覽有限公司及本網站對使用者張貼、註冊、填寫之任何資料，包括但不限於詐欺、不實、誤導性、不正確、誹謗性、冒犯性或非法資料，概不負責，亦無須對因該使用者之行為而致使任何人遭受之損害負責。

                                    <br><br>
                                    </li><li>
                                    7.3 無須對本網站錯誤或中斷負責
                                    承興國際展覽有限公司及本網站無須就下列造成之任何種類的損失、損害、主張/請求、責任或損壞，對使用者或任何第三人負責：（1）本網站、本服務，或自本網站或內容或得獲取之服務發生錯誤、不正確或遺漏（2）本網站或功能及其應用無法使用或中斷（3）使用者使用本網站（4）本網站所含之內容或因使用或無法使用本網站而遲延或無法履行義務。

                                    <br><br>
                                    </li><li>
                                    7.4 內容提供之免責
                                    透過本網站提供之內容皆係依現況提供，本網站茲明確聲明未提供任何保證，不論明示或暗示性之保證，包括但不限於與產權、品質、條件、性能或不侵權有關之保證，並於法律准許之最大範圍內，排除上述保證、聲明、條件及條款。使用者應承擔於本網站或透過本網站使用內容之全部責任與風險。
                                    </li></ul>
                                    </p>
                                    <div class="row justify-content-center">
                                        <div class="col-4 text-center p-0">
                                            <a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-blue" style="width: 140px;height: 44px;">返回上一頁</a>
                                        </div>
                                    </div>
                                </div>
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
<script>
$(function(){
});
</script>
<?= $this->endSection() ?>
