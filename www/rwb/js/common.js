//�ѱ۸��Է�
function onlyKorean(val) {
    let patten = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;
    return val.replace(patten, '');
  }
  //�̸�üũ