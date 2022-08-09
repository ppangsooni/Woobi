
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

function submitForm(){
 
    // �Է°� �߿� ��������� �ȵǴ� �͵��� ����.

    // id
    if(!document.member_form.userId.value){
        alert("���̵� �Է��ϼ���.");
        //Ŀ��(��Ŀ��)�� ���̵� ��ǲ��ҷ� �̵�
        document.member_form.userId.focus();
        return;
    }
    // ��й�ȣ
    if(!document.member_form.userPassword.value){
        alert("��й�ȣ�� �Է��ϼ���.");
        document.member_form.userPassword.focus();
        return;
    }
    // ��й�ȣ Ȯ��
    if(!document.member_form.pass_confirm.value){
        alert("��й�ȣ Ȯ���� �Է��ϼ���.");
        document.member_form.pass_confirm.focus();
        return;
    }
    // �̸�
    if(!document.member_form.userName.value){
        alert("�̸��� �Է��ϼ���.");
        document.member_form.userName.focus();
        return;
    }
    // �޴���ȭ
    if(!document.member_form.tel.value){
        alert("�޴���ȭ�� �Է��ϼ���.");
        document.member_form.tel.focus();
        return;
    }
    // �������
    if(!document.member_form.birth.value){
        alert("��������� �Է��ϼ���.");
        document.member_form.birth.focus();
        return;
    }
    // �̸���
    if(!document.member_form.email.value){
        alert("�̸����� �Է��ϼ���.");
        document.member_form.email.focus();
        return;
    }
    // ��й�ȣ�� ��й�ȣ Ȯ�� ĭ�� �Է°��� ������ ��
    if(document.member_form.userPassword.value != document.member_form.pass_confirm.value){
        alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�.\n�ٽ� �Է��� �ּ���.");
        document.member_form.userPassword.focus();
        // Ŀ���� �̵��ϰ� �װ��� ���ִ� �۾��� ���õǾ� ����.
        document.member_form.userPassword.select();
        return;
    }

    // form��Ҹ� ���� submit�ϴ� �޼ҵ�
    document.member_form.submit(); //�� ������Ʈ ���ϰ� ��, ��ǲ�� name�Ӽ��� document �迭�� ã�� �� ����.
    }

    // �ʱ�ȭ ��ư �̹��� Ŭ����
    function resetForm(){
    document.member_form.userId.value="";
    document.member_form.userPassword.value="";
    document.member_form.pass_confirm.value="";
    document.member_form.userName.value="";
    document.member_form.tel.value="";
    document.member_form.birth.value="";
    document.member_form.email.value="";

    // ù��° �Է� ��ҷ� �̵�
    document.member_form.userId.focus();
 }


//���̵� �ߺ� Ȯ�� ��ư Ŭ��
function checkId(){
    // ����ڰ� �Է��� id�� ������
    let userId= document.member_form.userId.value;

    // DB���� ���� ���̵� �ִ��� Ȯ���ϰ� ����� �����ִ� ���ο� ������ ����
    open("./check_id.php?userId="+userId, "���̵�üũ", "width=300, height=100, left=200, top=100");

}