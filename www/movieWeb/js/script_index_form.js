
// window.onload : ������ �ε� �Ϸ� ���¸� ��Ÿ���ϴ�
// document.getElementById : Ư�� ��ü �±� ���̵� �����մϴ� 
// scrollTop : Ư�� �±� ��ũ�� ��ġ�� �����մϴ�        



/* [html ���� �ε� �� �̺�Ʈ ��� ��� �ǽ�] */
window.onload = function() {
    console.log("");
    console.log("[window onload] : [start]");
    console.log("");
};



/* [top ��ũ�� �̺�Ʈ �Լ� ����] */
function top_scroll_move(){
    console.log("");
    console.log("[top_scroll_move] : [start]");
    console.log("");

    // ��ũ���� �̵��� ���̾ƿ� ���̵� ����
    let screen = document.querySelector(".screen");

    // [�� ������� ��ũ�� �̵� �ǽ�]
    screen.scrollTop = 0;
};



/* [bottom ��ũ�� �̺�Ʈ �Լ� ����] */
function bottom_scroll_move(){
    console.log("");
    console.log("[bottom_scroll_move] : [start]");
    console.log("");

    // ��ũ���� �̵��� ���̾ƿ� ���̵� ����
    let screen = document.querySelector(".screen");

    // [�� �ϴ����� ��ũ�� �̵� �ǽ�]
    screen.scrollTop = screen.scrollHeight;
};
//--------------------header------------------------------
    function back() {
        window.history.go(-1);
    }

//--------------------footer------------------------------
// footer���� ��ư
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

