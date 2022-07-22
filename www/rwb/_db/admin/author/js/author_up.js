let frmAuthor = document.frmAuthor;
let authorName = document.frmAuthor.authorName;
let btnSubmit = document.querySelector("[type=button]");

// console.log(frmAuthor);
// console.log(authorName);
// console.log(btnSubmit);

//keydown, keyup, keypress
//input
authorName.addEventListener('input', function() {
  this.value = onlyKorean(this.value);
});


btnSubmit.addEventListener('click', function() {
  chkSubmit();
});


function chkSubmit() {
  //trim() - �յ� ��������
  if(authorName.value.trim().length) {
    frmAuthor.submit();
  }
  return false;
}

function delAuthor(authorId, authorName) {
  if(confirm(authorName + "�۰��Ը� �����Ͻðڽ��ϱ�?")) {
    location.href = "author_del.php?authorId=" + authorId;
  }
}

function upAuthor(authorId, auName) {
  let btnCancel = document.querySelector("#cancelBtn");
  if(btnCancel) btnCancel.remove();
  btnCancel = document.createElement("button");
  btnCancel.innerText = "���";
  btnCancel.id = "cancelBtn";
  btnSubmit.insertAdjacentElement('afterend', btnCancel);
  btnSubmit.value = "����";
  authorName.value = auName;
  frmAuthor.action = "author_update.php?authorId=" + authorId;
  btnCancel.addEventListener('click', function(e) {
    e.preventDefault();
    btnSubmit.value = "���";
    authorName.value = "";
    frmAuthor.action = "author_up_ok.php";
    this.remove();
  });
}