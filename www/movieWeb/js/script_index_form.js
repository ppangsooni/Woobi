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

