function submitForm(){
 
    // �Է°� �߿� ��������� �ȵǴ� �͵��� ����.

    // id
    if(!document.member_form.id.value){
        alert("���̵� �Է��ϼ���.");
        //Ŀ��(��Ŀ��)�� ���̵� ��ǲ��ҷ� �̵�
        document.member_form.id.focus();
        return;
    }
    // ��й�ȣ
    if(!document.member_form.pass.value){
        alert("��й�ȣ�� �Է��ϼ���.");
        document.member_form.pass.focus();
        return;
    }
     // ��й�ȣ Ȯ��
     if(!document.member_form.pass_confirm.value){
        alert("��й�ȣ Ȯ���� �Է��ϼ���.");
        document.member_form.pass_confirm.focus();
        return;
    }
     // �̸�
     if(!document.member_form.name.value){
        alert("�̸��� �Է��ϼ���.");
        document.member_form.name.focus();
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
    if(document.member_form.pass.value != document.member_form.pass_confirm.value){
        alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�.\n�ٽ� �Է��� �ּ���.");
        document.member_form.pass.focus();
        // Ŀ���� �̵��ϰ� �װ��� ���ִ� �۾��� ���õǾ� ����.
        document.member_form.pass.select();
        return;
    }

    // form��Ҹ� ���� submit�ϴ� �޼ҵ�
    document.member_form.submit(); //�� ������Ʈ ���ϰ� ��, ��ǲ�� name�Ӽ��� document �迭�� ã�� �� ����.
}

// �ʱ�ȭ ��ư �̹��� Ŭ����
function resetForm(){
    document.member_form.id.value="";
    document.member_form.pass.value="";
    document.member_form.pass_confirm.value="";
    document.member_form.name.value="";
    document.member_form.email1.value="";
    document.member_form.email2.value="";

    // ù��° �Է� ��ҷ� �̵�
    document.member_form.id.focus();
}
