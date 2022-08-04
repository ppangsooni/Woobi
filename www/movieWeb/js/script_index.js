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
