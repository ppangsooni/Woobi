let openMenu = document.querySelector('.menuBtn'),
    slide = document.querySelector('.menuSlide'),

    closeMenu = document.querySelector('.menuClose');
    // menulistClick = document.querySelector('.menu_listCh>ul');


openMenu.addEventListener('click', function() {
    if (window.screen.width <= 680) {
        slide.style.display = 'block';
        
    } else {

        slide.style.display = 'block';
        // slide.style.left = "400px";
    } 


});
closeMenu.addEventListener('click', function() {
    slide.style.display = 'none';
});
//--------------------footer------------------------------
// footer영역 버튼
let footerBtn = document.querySelector('.footerBtn'),
    footerBtn_Ch = document.querySelector('.footerBtn_Ch'),
    footerSlide = document.querySelector('.pop_footer_center');

    footerBtn.addEventListener('click', function() {   
    if (footerSlide.style.display == 'none') {
        footerSlide.style.display = 'block';        
    } else {
        footerSlide.style.display = 'none';     
    } 
});