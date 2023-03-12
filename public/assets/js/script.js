
$(function(){
  // add preloader part //
  let preloader=document.querySelector(".preloader")
  let innerpreloader=document.createElement("div")
  innerpreloader.classList.add("load")
  preloader.append(innerpreloader)
  function appendhr() {
  let innerhr = document.createElement("hr")
  innerpreloader.append(innerhr)
  }
  for(let i=0;i<4;i++){
  appendhr()
  }
  // ----------------- //
})

window.onload = function(){
  function loadPage(href) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", href, false);
      xmlhttp.send();
      return xmlhttp.responseText;
  }
  //document.querySelector("#header").innerHTML = loadPage('header.html')
  document.querySelector("#back-to-top").addEventListener("click",function(){
    window.scrollTo(0, 0)
  })
  // fix carousel wierd display when first time enter index page //
  $('.js-slideshowVendor').flickity({
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    autoPlay: 2500,
    pauseAutoPlayOnHover: false,
    pageDots: window.innerWidth >=768 ? true : false
  });
  $('.js-slideshowVendor').on( 'select.flickity', function() { $('.js-slideshowVendor').flickity('playPlayer') })
  $('.js-slideshowVendor').on( 'click', function() { $('.js-slideshowVendor').flickity('playPlayer') })
  if(document.querySelector(".js-slideshowOtherExhi")){
    let swiperslideshowOtherExhi = new Swiper('.js-slideshowOtherExhi', {
      slidesPerView: "auto",
      spaceBetween: 20,
      loop: true,
      loopedSlides: 3,
      centeredSlides: true,
      autoplay: {
          delay: 2500,
          disableOnInteraction: false,
      },
      breakpoints: {
          768: {
              slidesPerView: 3,
              spaceBetween: 20
          },
          1024: {
              slidesPerView: 4,
              spaceBetween: 30
          },
      }
    });
  }


  $('.js-slideshowIndex').flickity({
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    adaptiveHeight: true
  });
  $('.js-slideshowIndex-mob').flickity({
    cellAlign: 'left',
    contain: true,
    wrapAround: true
  });
  // ----------------------------------------------------------- //

  // preloader remove when page load finished //

  document.querySelector(".preloader").style.opacity = "0"
  setTimeout(function(){
    document.querySelector(".preloader").remove()
  }, 100)

  // ---------------------------------------- //





  let navSubLink = document.querySelectorAll(".main-children a")
  let hrrow = document.createElement("hr")
  hrrow.classList.add("hr-row","my-2","mx-3")
  navSubLink.forEach(function(x){
    x.after(hrrow.cloneNode(true))
  })

  $(function(){
    $(".navbar-toggler").click(function(){
      $(".navbar-toggler-icon2").toggleClass("active")
      $(".navbar-mob").toggleClass("active")
    })
    $(".main-has-children").hover(function(){
      $(this).find(".main-children").addClass("active")
    },function(){
      $(this).find(".main-children").removeClass("active")
    })
    $(".sub-children").css("display","none")
    $(".sub-has-children").hover(function(){
      let _this = $(this).find(".sub-children")
      _this.css("display","flex")
      setTimeout(function(){
        _this.addClass("active")
      },10)
    },function(){
      let _this = $(this).find(".sub-children")
      _this.removeClass("active")
      setTimeout(function(){
        _this.css("display","none")
      },200)
    })
  })

  // make top bar active

  $(function(){
    let liArr = document.querySelectorAll(".link-group>ul>li")
    let check = ["exhibition","latest","coupon","activity","member","vendor","contact",'faq']
    let sectionClass = document.querySelectorAll("section")
    let sectionArr = []
    sectionClass.forEach(el => {
      sectionArr.push(el.className)
    })
    if(liArr[0]) {
      for (i=0;i<check.length;i++){
        if(sectionArr.join("").indexOf(check[i]) !== -1) {
          return liActive(i)
        }
      }

      function liActive(i) {
        liArr[i].classList.add("active")
      }
    }



  })

  // Make footer line,fb share btn link
  let btnLine =document.querySelector(".line-it-button")
  let btnFb =document.querySelector(".fb-share-button")
  let anchorFb =document.querySelector(".fb-share-button a")
  let fbShareLink = window.location.href.split("//")[1]
  if(btnLine) {
    btnLine.dataset.url = window.location.href
  }
  if(btnFb) {
    btnFb.dataset.href = window.location.href
    anchorFb.href = `https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F${fbShareLink}%2F&amp;src=sdkpreparse`
  }
  window.addEventListener('pageshow', function() {
    $(".color-block").find(".btn.b-hover-white").each(function(){
      $(this).css("color","")
    })
    $(".row-mommy .h-100").each(function(){
      $(this).css("color","")
    })
    $(".row-baby .h-100").each(function(){
      $(this).css("color","")
    })
  });

  $(".color-block").find(".btn.b-hover-white").each(function(){
    $(this).css("color","")
  })
  $(".row-mommy .h-100").each(function(){
    $(this).css("color","")
  })
  $(".row-baby .h-100").each(function(){
    $(this).css("color","")
  })

}

$(function(){
  // Make mobile back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  })

  // $('#back-to-top').click(function () {
  //   $('body,html').animate({
  //     scrollTop: 0
  //   }, 400);
  //   return false;
  // });
})




// {
//   //make index carousel
//   $('.js-slideshowVendor').flickity({
//     cellAlign: 'left',
//     contain: true,
//     wrapAround: true,
//     autoPlay: 4000,
//   });
//   $('.js-slideshowIndex').flickity({
//     cellAlign: 'left',
//     contain: true,
//     wrapAround: true,
//     adaptiveHeight: true
//   });
//   $('.js-slideshowIndex-mob').flickity({
//     cellAlign: 'left',
//     contain: true,
//     wrapAround: true
//   });
// }



$(function(){
  //make color-block square
  var el = $(".color-block .col-md-6.p-0")
  var el2 = $(".color-block .col-6.p-0")
  var imgObj = $(".vendor .img-box")
    el.css("height",el.width())
    el2.css("height",el2.width())
    $(".color-block .container-fluid").css("height",el.width())
    imgObj.css("height",imgObj.width())

  $(window).resize(function(){
    el.css("height",el.width())
    el2.css("height",el2.width())
    $(".color-block .container-fluid").css("height",el.width())
    imgObj.css("height",imgObj.width())

  })
})
$(function(){
  //make all news color random
  if($("section").hasClass("all-news")){
    let allColorsdata = [{"yellow":"#feda26","skyblue":"#26c1d4","red":"#e15754","green":"#26ab62","purple":"#ba48ef","peach":"#db2c73"}]
    let x
    let arrColor =[]
    for (x of allColorsdata) {
      let newsColor = document.querySelectorAll(".col-all-news span")
      function shuffle (arr) {
        let i,j,temp;
        for (i = arr.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        temp = arr[i];
        arr[i] = arr[j];
        arr[j] = temp;
        }
        return arr;
      }
      function shuffleCombo (a) {
        arrColor= arrColor.concat(a)
      }
      for (m=0;m<(Math.floor(newsColor.length/6)+1);m++) {
        shuffleCombo (shuffle(Object.values(x)))
      }

      for(i=0;i<newsColor.length;i++){
        newsColor[i].style.background = arrColor[i]
      }
    }
  }

})

$(function(){
  //make btn-hover effect
  $(".color-block").find(".btn.b-hover-white").each(function(){
    $(this).css("color","")
    $(this).hover(function(){
      $(this).css("color",$(this).closest(".el-color-block").css("background-color"))

    },function(){
      $(this).css("color","white")})
  })

  $("a.s-hover").hover(function(){
    $(this).children("span").addClass("s-hoveractive")
    $(this).children("span").removeClass("s-hoverout")
  },function(){
    $(this).children("span").addClass("s-hoverout")
    $(this).children("span").removeClass("s-hoveractive")

  })

  $(".fa-arrow-right").closest("a").hover(function(){
    $(this).children(".fa-arrow-right").animate({left:"10px"},100,"easeInOutBounce")
  },function(){
    $(this).children(".fa-arrow-right").animate({left:"5px"},100)
  })

  window.addEventListener('pageshow', function() {
    $(".color-block").find(".btn.b-hover-white").each(function(){
      $(this).css("color","")
    })
    $(".row-mommy .h-100").each(function(){
      $(this).css("color","")
    })
    $(".row-baby .h-100").each(function(){
      $(this).css("color","")
    })
  });

  //make each activity-block random color
  let rowMommy = document.querySelectorAll(".row-mommy > div")
  let rowBaby = document.querySelectorAll(".row-baby > div")

  let rowMommyColorArr = ["#ff5289","#ff92BC","#fc90A0"]
  let rowBabyColorArr = ["#20A857","#00C6C6","#53C988"]

  function colorBlockRandom() {
    for (i=1;i<rowMommy.length;i++){
      rowMommy[i].querySelector("div").style.backgroundColor = rowMommyColorArr[(i-1)%3]
    }
    for (i=1;i<rowBaby.length;i++){
      rowBaby[i].querySelector("div").style.backgroundColor = rowBabyColorArr[(i-1)%3]
    }
    $(".row-mommy .h-100").each(function(){
      $(this).css("color","")
      let bgColor = $(this).css("background-color")

      $(this).find(".btn").hover(function(){
        $(this).css("color",bgColor)
      },function(){
        $(this).css("color","white")})
    })
    $(".row-baby .h-100").each(function(){
      $(this).css("color","")
      let bgColor = $(this).css("background-color")
      $(this).find(".btn").hover(function(){
        $(this).css("color",bgColor)
      },function(){
        $(this).css("color","white")})
    })

  }
  colorBlockRandom()
  let windowWidth = window.innerWidth
  window.addEventListener("resize",()=>{
    if(window.innerWidth > 991){
      if(windowWidth <= 991) {
        colorBlockRandom()
      }
    }
    if(window.innerWidth <= 991){
      if(windowWidth > 991) {
        colorBlockRandom()
      }
    }
    windowWidth=window.innerWidth
  })

  //make each activity-block random color
  let colorBlockClass = ['bg-red','bg-skyblue','bg-green','bg-purple','bg-heavypink','bg-yellow']
  let colorBlocks = document.querySelectorAll(".coupon-main-page.color-block .el-color-block")
  for(i=0; i<colorBlocks.length;i++){
    let order = (i+1)%6
    let blockClass = colorBlockClass[order]
    colorBlocks[i].classList.add(blockClass)
  }
})



$(function(){
  //make member-top-bar color change in each site
  if($("section").hasClass("member-center")) {
    let linkArr = []
    $(".member-top-bar a").each(function(){
      linkArr.push($(this).attr("href").split(".",1)[0])
    })
    for (i=0;i<linkArr.length;i++){
      if($("section").hasClass(linkArr[i])) {
        $(".member-top-bar a").eq(i).addClass("active")
      }
      else if(!$("section").hasClass(linkArr[i])) {
        $(".member-top-bar a").eq(i).hover(function(){
          $(this).addClass("active")
        },function(){
          $(this).removeClass("active")
        })
      }
    }
  }

})


$(function(){
  // Check login signup panel form input active and make disabled
  if($("section").hasClass("member-login-panel")){
    if ($(".col-login").hasClass("active")) {
      $(".form-signup").css("display","none")
      // $(".form-login").find("input").prop("disabled",false)
      // $(".form-signup").find("input").prop("disabled",true)
      $(".form-switch").css("left",0)

    }
    if ($(".col-signup").hasClass("active")) {
      $(".form-signup").css("display","block")
      // $(".form-signup").find("input").prop("disabled",true)
      // $(".form-login").find("input").prop("disabled",false)
      $(".form-switch").css("left","calc(-100% - 48px)")
    }
  }

  $(".switch-signup").click(function(){
    let width = $(".form-signup").width()
    $(".col-signup").addClass("active")
    $(".col-login").removeClass("active")
    $(".form-signup").slideDown(200)
      // $(".form-login").find("input").prop("disabled",true)
      // $(".form-signup").find("input").prop("disabled",false)
      $(".form-switch").css("left","calc(-100% - 48px)")
  })

  $(".switch-login").click(function(){
    let width = $(".form-login").width()
    $(".col-login").addClass("active")
    $(".col-signup").removeClass("active")
    $(".form-signup").slideUp(500)
      // $(".form-signup").find("input").prop("disabled",true)
      // $(".form-login").find("input").prop("disabled",false)
    $(".form-switch").css("left",0)
  })

})

$(function(){
  //make county jsondata in select option
  if($("section").hasClass("member-profile-edit")){
    let myCountydata = JSON.parse(myCityCountyDataJSON);
    let CityNameNum = 0
    for (CityNameNum in myCountydata) {
      if (myCountydata.hasOwnProperty("CityName")) {
        CityNameNum++
      }
      $("#address-1").append("<option>"+myCountydata[CityNameNum].CityName+"</option")
    }
    $("#address-1").change(function(){
      $("#address-2").empty()
      $("#address-2").append("<option selected disabled>"+"鄉鎮市區"+"</option")
      let CityNameOptionTotal = $("#address-1").find("option")
      for(i=0;i<CityNameOptionTotal.length;i++) {
        if($(this).val() === CityNameOptionTotal[i].text) {
          let AreaNameTotal = myCountydata[i-1].AreaList
          for(j=0;j<AreaNameTotal.length;j++) {
            $("#address-2").append("<option>"+AreaNameTotal[j].AreaName+"</option")
          }
        }
      }
    })
  }

})

$(function(){
  //make history record select date range
  if($("section").hasClass("member-record")){
    var Main = {
      data() {
        return {
          pickerOptions: {
            shortcuts: [{
              text: 'Last week',
              onClick(picker) {
                console.log('----a------')
                const end = new Date();
                const start = new Date();
                start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
                picker.$emit('pick', [start, end]);
              }
            }, {
              text: 'Last month',
              onClick(picker) {
                console.log('----b------')
                const end = new Date();
                const start = new Date();
                start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
                picker.$emit('pick', [start, end]);
              }
            }, {
              text: 'Last 3 months',
              onClick(picker) {
                console.log('----c------')
                const end = new Date();
                const start = new Date();
                start.setTime(start.getTime() - 3600 * 1000 * 24 * 90);
                picker.$emit('pick', [start, end]);
              }
            }]
          },
          value1: '',
          value2: ''
        };
      },
      methods:{
        datepick(event){
          console.log('----datepick-----',event)
        }
      }
    };
    var Ctor = Vue.extend(Main)
    new Ctor().$mount('.datepickrange')
    $(".el-range-separator").text("至")
    $(".el-range-input").eq(0).attr("placeholder","開始日期")
    $(".el-range-input").eq(1).attr("placeholder","結束日期")
    //make ticket,activity,coupon jsondata
  }
  if($("section").hasClass("member-record-ticket")){
    let myMemberData = JSON.parse(myMemberRecordTicketDataJSON)
    for(i=0;i<myMemberData.length;i++){
      let propertyNames = Object.getOwnPropertyNames(myMemberData[i])
      let values = Object.values(myMemberData[i])

      if(myMemberData[i].dateType[0] === "valid") {
        $(".record-present .row-card").append('<div class="card card-record border-0" data-year="'+myMemberData[i].year[0]+'"></div>')
        for(j=0;j<propertyNames.length;j++){
          $(".record-present .card.card-record:nth-last-child(1)").append('<p class="'+ propertyNames[j] +'">'+ values[j][0] +'<span>'+ values[j][1] +'</span> </p>')
        }
        $(".record-present .card.card-record:nth-last-child(1)").find("p").each(function(){
            if($(this).children("span").text() === "") {
              $(this).remove()
            }
          }
        )
        $(".record-present .card.card-record:nth-last-child(1)").append('\
          <div class="col-auto p-0">\
            <a href="javascript:void(0)" class="btn btn-red float-right btn-cancel">取消報名</a>\
          </div>\
          <hr>\
        ')
      }
      else {

        $(".record-history .row-card").append('<div class="card card-record border-0" data-year="'+myMemberData[i].year[0]+'"></div>')
        for(j=0;j<propertyNames.length;j++){
          $(".record-history .card.card-record:nth-last-child(1)").append('<p class="'+ propertyNames[j] +'">'+ values[j][0] +'<span>'+ values[j][1] +'</span> </p>')
        }
        $(".record-history .card.card-record:nth-last-child(1)").find("p").each(function(){
            if($(this).children("span").text() === "") {
              $(this).remove()
            }
          }
        )
        if(myMemberData[i].dateType[0] === "used"){
          $(".record-history .card.card-record:nth-last-child(1)").append('\
          <div class="col-auto p-0">\
            <button type="submit" class="btn btn-grey float-right">使用完畢</button>\
          </div>\
          <hr>\
          ')
        }
        if(myMemberData[i].dateType[0] === "void"){
          $(".record-history .card.card-record:nth-last-child(1)").append('\
          <div class="col-auto p-0">\
            <button type="submit" class="btn btn-grey float-right">已逾期</button>\
          </div>\
          <hr>\
          ')
        }
      }

    }
  }
  if($("section").hasClass("member-record-activity")){
    let myMemberData = JSON.parse(myMemberRecordActivityDataJSON)
    for(i=0;i<myMemberData.length;i++){
      let propertyNames = Object.getOwnPropertyNames(myMemberData[i])
      let values = Object.values(myMemberData[i])

      if(myMemberData[i].dateType[0] === "valid") {
        $(".record-present .row-card").append('<div class="card card-record border-0" data-year="'+myMemberData[i].year[0]+'"></div>')
        for(j=0;j<propertyNames.length;j++){
          $(".record-present .card.card-record:nth-last-child(1)").append('<p class="'+ propertyNames[j] +'">'+ values[j][0] +'<span>'+ values[j][1] +'</span> </p>')
        }
        $(".record-present .card.card-record:nth-last-child(1)").find("p").each(function(){
            if($(this).children("span").text() === "") {
              $(this).remove()
            }
          }
        )
        $(".record-present .card.card-record:nth-last-child(1)").append('\
          <div class="col-auto p-0">\
            <a href="javascript:void(0)" class="btn btn-red float-right btn-cancel">取消報名</a>\
          </div>\
          <hr>\
        ')
      }
      else {

        $(".record-history .row-card").append('<div class="card card-record border-0" data-year="'+myMemberData[i].year[0]+'"></div>')
        for(j=0;j<propertyNames.length;j++){
          $(".record-history .card.card-record:nth-last-child(1)").append('<p class="'+ propertyNames[j] +'">'+ values[j][0] +'<span>'+ values[j][1] +'</span> </p>')
        }
        $(".record-history .card.card-record:nth-last-child(1)").find("p").each(function(){
            if($(this).children("span").text() === "") {
              $(this).remove()
            }
          }
        )
        if(myMemberData[i].dateType[0] === "used"){
          $(".record-history .card.card-record:nth-last-child(1)").append('\
          <div class="col-auto p-0">\
            <button type="submit" class="btn btn-grey float-right">使用完畢</button>\
          </div>\
          <hr>\
          ')
        }
        if(myMemberData[i].dateType[0] === "void"){
          $(".record-history .card.card-record:nth-last-child(1)").append('\
          <div class="col-auto p-0">\
            <button type="submit" class="btn btn-grey float-right">已逾期</button>\
          </div>\
          <hr>\
          ')
        }
      }

    }
  }
  if($("section").hasClass("member-record-coupon")){
    let myMemberData = JSON.parse(myMemberRecordCouponDataJSON)
    for(i=0;i<myMemberData.length;i++){
      let propertyNames = Object.getOwnPropertyNames(myMemberData[i])
      let values = Object.values(myMemberData[i])

      if(myMemberData[i].dateType[0] === "valid") {
        $(".record-present .row-card").append('<div class="card card-record border-0" data-year="'+myMemberData[i].year[0]+'"></div>')
        for(j=0;j<propertyNames.length;j++){
          $(".record-present .card.card-record:nth-last-child(1)").append('<p class="'+ propertyNames[j] +'">'+ values[j][0] +'<span>'+ values[j][1] +'</span> </p>')
        }
        $(".record-present .card.card-record:nth-last-child(1)").find("p").each(function(){
            if($(this).children("span").text() === "") {
              $(this).remove()
            }
          }
        )
        $(".record-present .card.card-record:nth-last-child(1)").append('\
          <div class="col-auto p-0">\
            <a href="javascript:void(0)" class="btn btn-red float-right btn-cancel">取消報名</a>\
          </div>\
          <hr>\
        ')
      }
      else {

        $(".record-history .row-card").append('<div class="card card-record border-0" data-year="'+myMemberData[i].year[0]+'"></div>')
        for(j=0;j<propertyNames.length;j++){
          $(".record-history .card.card-record:nth-last-child(1)").append('<p class="'+ propertyNames[j] +'">'+ values[j][0] +'<span>'+ values[j][1] +'</span> </p>')
        }
        $(".record-history .card.card-record:nth-last-child(1)").find("p").each(function(){
            if($(this).children("span").text() === "") {
              $(this).remove()
            }
          }
        )
        if(myMemberData[i].dateType[0] === "used"){
          $(".record-history .card.card-record:nth-last-child(1)").append('\
          <div class="col-auto p-0">\
            <button type="submit" class="btn btn-grey float-right">使用完畢</button>\
          </div>\
          <hr>\
          ')
        }
        if(myMemberData[i].dateType[0] === "void"){
          $(".record-history .card.card-record:nth-last-child(1)").append('\
          <div class="col-auto p-0">\
            <button type="submit" class="btn btn-grey float-right">已逾期</button>\
          </div>\
          <hr>\
          ')
        }
      }

    }
  }

  if($("section").hasClass("activity-content-step-1")){
    function babyDelete() {
      $(".delete-baby").click(function(){
        if ($(".delete-baby").length === 1) {
          alert("請至少填寫一位寶寶資料")
        }
        else {
          let deleteBaby = $(this).closest(".baby-apply")
          deleteBaby.slideUp()
          setTimeout(function(){
            deleteBaby.remove()
            babyOrder()
          },400)
        }
      })
    }
    $(".new-baby").click(function(){
      let newBabyApply = '<div class="baby-apply" style=" display:none;">\
                            <div class="row align-items-center form-group">\
                                <div class="px-0 col-12">\
                                    <label class="m-0">第<span class="mx-1 baby-order">2</span>位寶寶：</label>\
                                </div>\
                            </div>\
                            <div class="row align-items-center form-group">\
                                <div class="px-0 col-3">\
                                    <label class="m-0">場次選取*</label>\
                                </div>\
                                <div class="col">\
                                    <select class="form-control" id="">\
                                        <option selected disabled>請選取場次</option>\
                                        <option>8/14 13:00-14:00</option>\
                                        <option>8/16 13:00-14:00</option>\
                                        <option value="full" disabled>8/17 10:30-11:30 已額滿</option>\
                                    </select>\
                                </div>\
                            </div>\
                            <div class="row align-items-center form-group">\
                                <div class="px-0 col-3">\
                                    <label class="m-0">選擇寶寶*</label>\
                                </div>\
                                <div class="col">\
                                    <select class="form-control baby-select" id="">\
                                        <option selected disabled>請選取寶寶</option>\
                                    </select>\
                                </div>\
                            </div>\
                            <div class="baby-selected-info">\
                            </div>\
                            <div class="row justify-content-end form-group">\
                                <div class="col-auto">\
                                    <a href="javascript:void(0)" class="btn btn-red delete-baby">刪除</a>\
                                </div>\
                            </div>\
                            <hr class="my-5" style="margin-left: -15px">\
                        </div>'
      $(".baby-apply-group").append(newBabyApply)
      let newBaby = $(".baby-apply-group").find(".baby-apply")
        newBaby.slideDown()
        babyMainFuction()
    })
    function babyOrder() {
      $(".baby-order").each(function(){
        $(this).text($(".baby-order").index($(this))+1)
      })

    }


    let myBabyData = JSON.parse(myMemberBabyDataJSON)
    function babyMainFuction() {
      let babyArr = []
      $(".baby-select").each(function(){
        if($(this).children("option").last().val() !== "other") {
          for (i=0;i<myBabyData.length;i++) {
            $(this).append("<option>"+myBabyData[i].kidName[1]+"</option>")
            let _babyArr = []
            _babyArr.push(myBabyData[i].kidName[1],myBabyData[i].kidBirth[1])
            babyArr.push(_babyArr)
          }
          $(this).append("<option value='other'>其他</option>")
        }

      })

      $(".baby-select").change(function(){
        let babyInput = babyArr
        $(this).closest(".baby-apply").children(".baby-selected-info").empty()
        if($(this).val() === "other") {
          $(this).closest(".baby-apply").children(".baby-selected-info").append(
            '<div class="baby-file mb-2">\
                <div class="row align-items-center form-group">\
                    <div class="px-0 col-3">\
                        <label class="m-0">寶寶姓名*</label>\
                    </div>\
                    <div class="col">\
                        <input type="text" class="form-control col">\
                    </div>\
                </div>\
                <div class="row align-items-center form-group">\
                    <div class="px-0 col-3">\
                        <label class="m-0">寶寶生日*</label>\
                    </div>\
                    <div class="col">\
                        <input type="text" value="" class="form-control" required>\
                    </div>\
                </div>\
            </div>'
          )
          datepick()
        }
        else {
          for(i=0;i<babyArr.length;i++){
            if($(this).val() === babyInput[i][0]){
              $(this).closest(".baby-apply").children(".baby-selected-info").append(
                '<div class="row align-items-center form-group">\
                    <div class="px-0 col-3">\
                        <label class="m-0">寶寶姓名</label>\
                    </div>\
                    <div class="col-9">\
                        <p class="m-0">'+babyInput[i][0]+'</p>\
                    </div>\
                </div>\
                <div class="row align-items-center form-group">\
                    <div class="px-0 col-3">\
                        <label class="m-0">寶寶生日</label>\
                    </div>\
                    <div class="col-9">\
                        <p class="m-0">'+babyInput[i][1]+'</p>\
                    </div>\
                </div>'
              )
            }
          }
        }
      })
      babyOrder()
      babyDelete()
    }
    babyOrder()
    babyMainFuction()
}

})


$(function(){
  //make cancel activity check info
  let backToWindow = function(){
    $(".wrapper-check-cancel .wrapper-alert-window").slideUp(250)
    $(".wrapper-check-cancel").fadeOut(280)
  }
  $(".btn-cancel").click(function(){
    $(".wrapper-check-cancel").fadeIn(180)
    $(".wrapper-check-cancel .wrapper-alert-window").slideDown(250)
  })
  $(".btn-back-to-window").click(
    backToWindow
  )
  $(".wrapper-bg-black").click(
    backToWindow
  )
  $(".wrapper-bg-black").click(
    backToWindow
  )
  $(window).on('keyup', function(e) {
    if (e.which == 27) {
      backToWindow()
    }
  });

})


$(function(){
  if($("section").hasClass("member-profile-edit")){
    //make baby data adding and delete
    let newBabyFile = '<div class="baby-file col-12 mb-4"\
    style="display: none;border:1px solid #9B9B9B;border-radius: 8px;">\
    <div class="row pt-4 pb-2 px-3">\
        <div class="row align-items-center col-md-auto form-group">\
            <label for="baby-name-02" class="m-0 col-auto">寶寶姓名</label>\
            <input type="text" class="form-control col" value="">\
        </div>\
        <div class="row align-items-center col-md-auto form-group">\
            <label for="baby-birth-02" class="m-0 col-auto">寶寶生日</label>\
            <input type="text" value="" class="form-control col" required>\
        </div>\
        <div class="row col-md form-group justify-content-end">\
          <a href="javascript:void(0)" class="btn btn-red delete-baby">刪除</a>\
        </div>\
    </div>\
    </div>'
    $(".new-baby").click(function(){
      let _this = $(this)
      $(".baby-file-group").append(newBabyFile)
      let newBaby = $(".baby-file-group").find(".baby-file")
      newBaby.slideDown()
        $(".baby-file-group").find(".delete-baby").click(function(){
          let deleteBaby = $(this).closest(".baby-file")
          deleteBaby.slideUp()
          setTimeout(function(){
          deleteBaby.remove()
          },500)
        })
        datepick()
    })

    $(".delete-baby").click(function(){
      let deleteBaby = $(this).closest(".baby-file")
      deleteBaby.slideUp()
      setTimeout(function(){
        deleteBaby.remove()
      },500)
    })

    //make user if subcribing
    $(".select-subcribe").change(function(){
      if($(this).val() === "1") {
        $(".check-subcribe").slideDown()
      }
      else if($(this).val() === "0") {
        $(".check-subcribe").slideUp()
      }
    })
    $(".checked-all").click(function(){
      $(".check-subcribe").find("input").prop("checked",true)
    })
    $(".checked-all-cancel").click(function(){
      $(".check-subcribe").find("input").prop("checked",false)
    })
  }

})


$(function(){
  //make history record switch
  $(".btn-history-switch").click(function(){
    let _this = $(this)
    if(_this.attr("switch") === "1") {
      $(".record-history").slideDown(500)
      _this.text("收起")
      _this.attr("switch","0")
    }
    else if(_this.attr("switch") === "0") {
      $(".record-history").slideUp(500)
      _this.text("歷史紀錄")
      _this.attr("switch","1")
    }
  })
})

$(function(){
  let rowGroupFaq = document.querySelectorAll(".row-group-faq")
  for (i=0;i<rowGroupFaq.length;i++){
    let rowFaq = rowGroupFaq[i].querySelectorAll("div.row")
    for(j=0;j<(rowFaq.length-1);j++) {
      let hr = document.createElement("hr")
      hr.classList.add("hr-row","my-2","w-100")
      rowFaq[j].append(hr)
    }
    for(k=0;k<rowFaq.length;k++) {
      let col = document.createElement("div")
      let h3 = document.createElement("h3")
      col.classList.add("col-auto", "p-0", "order-q")
      h3.classList.add("question")
      h3.innerText="Q："
      col.append(h3)
      rowFaq[k].prepend(col)
    }
  }
})

// make date picker
// $(function(){
//   let arr = ['#signup-birth','#birth','.form-date']
//   function datepick(){
//     arr.forEach(el => {
//       if(document.querySelector(el)) {
//         $(el).datepicker({
//           language: "zh-TW",
//           format: "yyyy/mm/dd",
//           autoclose: true
//         });
//       }
//     })
//   }
//   datepick()
// })

// make popup

$(function(){
  $(".btn-cross").click(function(){
    $("section.popup").fadeOut(300)
  })

})


// make latest-news block paragraph display

$(function(){
  $(".latest-news .row.mt-5 .col-md-4").each(function(){
    let innertext = $(this).find(".text-truncate-3").text()
    $(this).find(".text-truncate-3").text(innertext)
  })
  $(".latest-news-main-page .row.mt-5 .col-md-4").each(function(){
    let innertext = $(this).find(".text-truncate-3").text()
    $(this).find(".text-truncate-3").text(innertext)
  })

})
