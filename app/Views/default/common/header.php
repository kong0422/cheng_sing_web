<div>
    <div class="preloader"></div>
    <header id="header" class="header">
    <div id="navbar" class="container-fluid">
        <div class="row">
            <nav class="navbar-des navbar navbar-expand">
                <div class="navbar-nav">
                    <div class="navbar-logo ">
                        <!-- <a href="/" class="navbar-brand"><img src="/assets/img/BMlogo.svg" alt="" style="width: 180px;"></a> -->
                        <a href="/" class="navbar-brand">
                            <img src="<?="{$storage_url}pic/{$exhibition['exhibition_classes_logo']}";?>" alt="<?=$meta['title'];?>" style="max-height: 40px;">
                        </a>
                    </div>
                    <a href="/exhibition">展覽資訊</a>
                    <a href="/news">最新消息</a>
                    <!-- <a href="/coupon">好康優惠</a> -->
                    <a href="/activity">大會活動</a>
                    <!-- <a href="/member">會員專區</a> -->
                    <a href="/vendor">參與廠商</a>
                    <a href="/contact">聯絡我們</a> <a href="/faq">常見Q&amp;A</a>
                    <!-- <a href="/member" class="btn btn-purple rounded-pill">登入/新會員註冊</a> -->
                    <div class="member my-auto">
                        <div>
                            <a href="<?=$ticket_member_url;?>" target="_blank" class="c-pink c-hover-heavypink">
                                <img src="/assets/img/member.svg" alt="" class="mr-2" style="width: 35px;">會員中心
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <nav class="navbar-mob navbar navbar-light" style="flex-wrap: nowrap;">
        <div class="d-flex">
            <div class="navbar-logo d-inline-block"><a href="/" class="navbar-brand" style="margin: 0px;"><img src="/assets/img/BMlogo.svg" alt=""></a></div>
            <div class="navbar-btn"><a href="/member-login-panel" class="btn btn-purple rounded-pill" style="white-space: nowrap;">登入/新會員註冊</a></div>
        </div>
        <div class="d-flex">
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent-member" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-member px-0 user">
                <span class="navbar-toggler-icon-member">
                <img src="/assets/img/member.svg" alt="" style="position: relative; bottom: 4px;"> <!---->
                </span>
            </button>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler menu">
                <span class="navbar-toggler-icon" style="opacity: 0;"></span>
                <span class="navbar-toggler-icon-menu">
                <img src="/assets/img/menu_line.svg" alt="">
                <p class="c-pink" style="font-size: 12px; white-space: nowrap;">主選單</p>
                </span>
            </button>
        </div>
        <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-menu-bar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="/" class="nav-link">首頁</a></li>
                <li class="nav-item"><a href="/exhibition" class="nav-link">展覽資訊</a></li>
                <li class="nav-item"><a href="/news" class="nav-link">最新消息</a></li>
                <!-- <li class="nav-item"><a href="/coupon" class="nav-link">好康優惠</a></li> -->
                <li class="nav-item"><a href="/activity" class="nav-link">大會活動</a></li>
                <!-- <li class="nav-item"><a href="/member" class="nav-link">會員專區</a></li> -->
                <li class="nav-item"><a href="/vendor" class="nav-link">參與廠商</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">聯絡我們</a></li>
                <li class="nav-item"><a href="/faq" class="nav-link">常見Q&amp;A</a></li>
            </ul>
            <div class="top-shadow"></div>
        </div>
        <div id="navbarSupportedContent-member" class="collapse navbar-collapse navbar-member-bar">
            <ul class="navbar-nav mr-auto">
                <!---->
                <li class="nav-item">
                <a href="/member-profile" class="nav-link">
                    <p class="icon icon-user">會員資料</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="/member-change-password" class="nav-link">
                    <p class="icon icon-password">變更密碼</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="/member-record-ticket" class="nav-link">
                    <p class="icon icon-ticket">免費索票紀錄</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="/member-record-activity" class="nav-link">
                    <p class="icon icon-file">活動報名紀錄</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="/member-record-coupon" class="nav-link">
                    <p class="icon icon-coupon">好康優惠紀錄</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="/logout" class="nav-link">
                    <p class="icon icon-logout">登出</p>
                </a>
                </li>
            </ul>
            <div class="top-shadow"></div>
        </div>
    </nav>
    <div class="back-to-top-btn"><a id="back-to-top" href="javascript:void(0)" class="bttbtn btn back-to-top" style=""><img src="/assets/img/bttbtn.svg" alt=""></a></div>
    </header>
</div>
