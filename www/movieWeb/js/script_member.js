
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

function submitForm(){
 
    // 입력값 중에 비어있으면 안되는 것들이 있음.

    // id
    if(!document.member_form.userId.value){
        alert("아이디를 입력하세요.");
        //커서(포커스)를 아이디 인풋요소로 이동
        document.member_form.userId.focus();
        return;
    }
    // 비밀번호
    if(!document.member_form.userPassword.value){
        alert("비밀번호를 입력하세요.");
        document.member_form.userPassword.focus();
        return;
    }
    // 비밀번호 확인
    if(!document.member_form.pass_confirm.value){
        alert("비밀번호 확인을 입력하세요.");
        document.member_form.pass_confirm.focus();
        return;
    }
    // 이름
    if(!document.member_form.userName.value){
        alert("이름을 입력하세요.");
        document.member_form.userName.focus();
        return;
    }
    // 휴대전화
    if(!document.member_form.tel.value){
        alert("휴대전화를 입력하세요.");
        document.member_form.tel.focus();
        return;
    }
    // 생년월일
    if(!document.member_form.birth.value){
        alert("생년월일을 입력하세요.");
        document.member_form.birth.focus();
        return;
    }
    // 이메일
    if(!document.member_form.email.value){
        alert("이메일을 입력하세요.");
        document.member_form.email.focus();
        return;
    }
    // 비밀번호와 비밀번호 확인 칸의 입력값이 같은지 비교
    if(document.member_form.userPassword.value != document.member_form.pass_confirm.value){
        alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요.");
        document.member_form.userPassword.focus();
        // 커서가 이동하고 그곳에 써있는 글씨가 선택되어 있음.
        document.member_form.userPassword.select();
        return;
    }

    // form요소를 직접 submit하는 메소드
    document.member_form.submit(); //겟 엘리먼트 안하고 폼, 인풋을 name속성이 document 배열로 찾을 수 있음.
    }

    // 초기화 버튼 이미지 클릭시
    function resetForm(){
    document.member_form.userId.value="";
    document.member_form.userPassword.value="";
    document.member_form.pass_confirm.value="";
    document.member_form.userName.value="";
    document.member_form.tel.value="";
    document.member_form.birth.value="";
    document.member_form.email.value="";

    // 첫번째 입력 요소로 이동
    document.member_form.userId.focus();
 }


//아이디 중복 확인 버튼 클릭
function checkId(){
    // 사용자가 입력한 id값 얻어오기
    let userId= document.member_form.userId.value;

    // DB에서 같은 아이디가 있는지 확인하고 결과를 보여주는 새로운 윈도우 띄우기
    open("./check_id.php?userId="+userId, "아이디체크", "width=300, height=100, left=200, top=100");

}