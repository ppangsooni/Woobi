
// window.onload : 브라우저 로드 완료 상태를 나타냅니다
// document.getElementById : 특정 객체 태그 아이디를 지정합니다 
// scrollTop : 특정 태그 스크롤 위치를 지정합니다        



/* [html 최초 로드 및 이벤트 상시 대기 실시] */
window.onload = function() {
    console.log("");
    console.log("[window onload] : [start]");
    console.log("");
};



/* [top 스크롤 이벤트 함수 정의] */
function top_scroll_move(){
    console.log("");
    console.log("[top_scroll_move] : [start]");
    console.log("");

    // 스크롤을 이동할 레이아웃 아이디 지정
    let screen = document.querySelector(".screen");

    // [맨 상단으로 스크롤 이동 실시]
    screen.scrollTop = 0;
};



/* [bottom 스크롤 이벤트 함수 정의] */
function bottom_scroll_move(){
    console.log("");
    console.log("[bottom_scroll_move] : [start]");
    console.log("");

    // 스크롤을 이동할 레이아웃 아이디 지정
    let screen = document.querySelector(".screen");

    // [맨 하단으로 스크롤 이동 실시]
    screen.scrollTop = screen.scrollHeight;
};
//--------------------header------------------------------
    function back() {
        window.history.go(-1);
    }

//--------------------footer------------------------------
// footer영역 버튼
let footerBtn = document.querySelector('.footerBtn'),
    footerBtn_Ch = document.querySelector('.footerBtn_Ch'),
    footerSlide = document.querySelector('.footer_center');

    footerBtn.addEventListener('click', function() {   
    if (footerSlide.style.display == 'none') {
        footerSlide.style.display = 'block';        
    } else {
        footerSlide.style.display = 'none';     
    } 
});

