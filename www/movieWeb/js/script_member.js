function submitForm(){
 
    // 입력값 중에 비어있으면 안되는 것들이 있음.

    // id
    if(!document.member_form.id.value){
        alert("아이디를 입력하세요.");
        //커서(포커스)를 아이디 인풋요소로 이동
        document.member_form.id.focus();
        return;
    }
    // 비밀번호
    if(!document.member_form.pass.value){
        alert("비밀번호를 입력하세요.");
        document.member_form.pass.focus();
        return;
    }
     // 비밀번호 확인
     if(!document.member_form.pass_confirm.value){
        alert("비밀번호 확인을 입력하세요.");
        document.member_form.pass_confirm.focus();
        return;
    }
     // 이름
     if(!document.member_form.name.value){
        alert("이름을 입력하세요.");
        document.member_form.name.focus();
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
    if(document.member_form.pass.value != document.member_form.pass_confirm.value){
        alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요.");
        document.member_form.pass.focus();
        // 커서가 이동하고 그곳에 써있는 글씨가 선택되어 있음.
        document.member_form.pass.select();
        return;
    }

    // form요소를 직접 submit하는 메소드
    document.member_form.submit(); //겟 엘리먼트 안하고 폼, 인풋을 name속성이 document 배열로 찾을 수 있음.
}

// 초기화 버튼 이미지 클릭시
function resetForm(){
    document.member_form.id.value="";
    document.member_form.pass.value="";
    document.member_form.pass_confirm.value="";
    document.member_form.name.value="";
    document.member_form.email1.value="";
    document.member_form.email2.value="";

    // 첫번째 입력 요소로 이동
    document.member_form.id.focus();
}
