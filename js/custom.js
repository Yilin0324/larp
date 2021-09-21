//scroll to id
$("#Menu a, #Arrow a").click(function () {
  const
    who = $(this).attr('href'),
    val = $(who).offset().top - $("#Menu").innerHeight();
  $("html").animate({ scrollTop: val }, 1000);
});

//scroll spy
const spy = function () {
  const nowat = $(window).scrollTop();
  $("section").each((i, e) => {
    // console.log(i,e);
    const
      id = $(e).attr('id'),
      offset = $(e).offset().top - $("#Menu").innerHeight() - 1,
      height = $(e).innerHeight();


    if (offset <= nowat && nowat < offset + height) {
      // console.log(id);
      $("#Menu a").removeClass('active');
      $(`#Menu a[href='#${id}']`).addClass('active');
    }
  });
}

//check bg menu
const bgmenu = function () {
  const
    viewWidth = $(window).innerWidth(),
    nowat = $(window).scrollTop(),
    height = $("#hero").innerHeight(),
    offset = $("#Menu").innerHeight() + 1;

  if (nowat <= height - offset) {  //落在 首區內
    $("#Arrow").fadeOut(); //隱藏至頂按鈕

    if (viewWidth > 767) $("#Menu").removeClass('bg-dark');  // 大畫面
    else $("#Menu").addClass('bg-dark'); // 小畫面

  } else {  //在其他主題時
    $("#Menu").addClass('bg-dark');
    $("#Arrow").fadeIn();
  }
}

//當網頁滾動時
$(window).scroll(() => {
  spy();
  bgmenu();
});
//當網頁更改寬度時
$(window).resize(bgmenu);


spy();
bgmenu();


//animate
AOS.init({
  duration: 1500,
  once: true
});

// var app = document.getElementById('app');

// var typewriter = new Typewriter(app, {
//   strings:["I'm Web designer & performing artist","A favorite of the girls try new things."],
//   autoStart:true,
//   loop: true,
//   delay: 75,
// });

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    items: 3, // 一次輪播幾個項目
    loop:true,
    margin:10,
    nav:false,// 導航文字
    autoplay: true, // 自動輪播
    autoplayTimeout: 5000, // 切換時間
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
});

  
  $(".imgtype").on('click',function(){
    let img = $(this).clone().children()
    $("#imgShow").html(img)
  })
  



