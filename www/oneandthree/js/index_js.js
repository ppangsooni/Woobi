
// -----width=690(모바일)경우 메뉴변화-----
let openMenu = document.querySelector('.menu_btn'),
    slide = document.querySelector('nav'),
    closeMenu = document.querySelector('.menuClose'),
    menulistClick = document.querySelectorAll('.menuberList_li>a');
    menulistOpen = document.querySelectorAll('.menuberList_liCh');

console.log (menulistClick);

openMenu.addEventListener('click', function(){
    seeMenu();
});
closeMenu.addEventListener('click', function(){
    hideMenu();
});
function seeMenu() {
    slide.style.display="block";
    slide.style.position="absolute";
    slide.style.width="70%";
}
function hideMenu() {
    slide.style.display="none";
}

for(i=0; i<menulistClick.length; i++) {
    console.log(menulistClick[i]);
    menulistClick[i].addEventListener('click', function(){ 
        if (this.nextSibling.nextSibling.style.display == "none") {
            console.log('1:', this);
            console.log(this.nextSibling.nextSibling) ;
            this.nextSibling.nextSibling.style.display = "block";
        } else {
            this.nextSibling.nextSibling.style.display = "none";
        };
    });
}
// ---- 스크롤시 효과 ------
ScrollOut({
    targets: ".oatWrap,.wrapBottom",
    threshold: 0.5,
    once: true,
    onShown(el) {
        el.classList.add("animated");
    }
});
// -----main_Imgbox_ 이미지 슬라이드쇼 ------
let main_bannerPC_Img= [
    "./img/top_baner1_PC1920x440.png",
    "./img/top_baner2_PC1920x440.png",
    "./img/top_baner3_PC1920x440.png",
    "./img/top_baner4_PC1920x440.png"
]   
let main_bannerMB_Img= [
    "./img/top_baner1_MB2048x2048.png",
    "./img/top_baner2_MB2048x2048.png",
    "./img/top_baner3_MB2048x2048.png",
    "./img/top_baner4_MB2048x2048.png"
]   
let cnt = 0;
chage_banner_Img();

function chage_banner_Img() { 
    if (window.innerWidth>=690 ) {
        document.querySelector('.main_banner_Img').setAttribute('src', main_bannerPC_Img[cnt]);
        // document.querySelector('.main_banner_Imgbox>a').setAttribute('href', 이미지 자세히보기 주소);
        cnt = cnt + 1;        
        if( cnt == 4) {
            cnt = 0;
        };        
    } else {
        document.querySelector('.main_banner_Img').setAttribute('src', main_bannerMB_Img[cnt]);
    // document.querySelector('.main_banner_Imgbox>a').setAttribute('href', 이미지 자세히보기 주소);
    cnt = cnt + 1;        
    if( cnt == 4) {
        cnt = 0;
    };        
    }                      
    
}
setInterval(chage_banner_Img, 3000);
// window.onresize=function(){
    
// }

function currentSlide1() {
    document.querySelector('.main_banner_Img').setAttribute('src', main_banner_Img[1]);
}

// -----main_menulistWrap Swiper -----
let menulistCotroll = document.querySelectorAll('.main_ml_topRight>ul>a>li'),
        menulistTab_Cl = document.getElementsByClassName('main_ml_bottom_cl')[0],
        menulistTab_fl = document.getElementsByClassName('main_ml_bottom_fl')[0],
        menulistTab_pm = document.getElementsByClassName('main_ml_bottom_pm')[0],
        menulistTab_mo = document.getElementsByClassName('main_ml_bottom_mo')[0];

menulistCotroll[0].addEventListener('click', () => {
    menulistTab_Cl.style.display = 'block';
    menulistTab_fl.style.display = 'none';
    menulistTab_pm.style.display = 'none';
    menulistTab_mo.style.display = 'none';
});

menulistCotroll[1].addEventListener('click', () => {
    menulistTab_fl.style.display = 'block';
    menulistTab_Cl.style.display = 'none';
    menulistTab_pm.style.display = 'none';
    menulistTab_mo.style.display = 'none';
});

menulistCotroll[2].addEventListener('click', () => {
    menulistTab_pm.style.display = 'block';
    menulistTab_Cl.style.display = 'none';
    menulistTab_fl.style.display = 'none';
    menulistTab_mo.style.display = 'none';

});

menulistCotroll[3].addEventListener('click', () => {
    menulistTab_mo.style.display = 'block';
    menulistTab_Cl.style.display = 'none';
    menulistTab_fl.style.display = 'none';
    menulistTab_pm.style.display = 'none';
});

/*Section 공통> Initialize Swiper */

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 10,
    slidesPerGroup: 4,
    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 2,
          spaceBetween: 5,
          slidesPerGroup: 2
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 3,
          spaceBetween: 8,
          slidesPerGroup: 3
        },
        // when window width is >= 640px
        680: {
          slidesPerView: 4,
          spaceBetween: 10,
          slidesPerGroup: 4
        },
      },
    //loop: true>>반복 
    //loopFillGroupWithBlank: true, >>공백값
    // loop: true,
    // loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });
// ----wrapTopButton_ 탑버튼 -----
const topBtn = document.getElementById('topBtn');

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    topBtn.style.display = "block";
  } else {
    topBtn.style.display = "none";
  }
}

topBtn.onclick = () => {
    window.scrollTo({left: 0, top: 0, behavior: 'smooth'});
}