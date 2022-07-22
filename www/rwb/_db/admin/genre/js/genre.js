let frmGenre = document.querySelector("form");
let txtGenreName = document.querySelector("input[type='text']");
//let btnGenreOk = document.querySelector("input[type='submit']");

// console.log(frmGenre);
// console.log(txtGenreName);
// console.log(btnGenreOk);
frmGenre.onsubmit = function () {
  if (txtGenreName.value.trim().length == 0) {
    // console.dir(this);
    txtGenreName.placeholder = '???? ????????.';
    txtGenreName.focus();
    return false;
  }

  return true;
};

function delGenre(genreId) {
  if(confirm('??????©£??????')) {
    location.href = "genre_del_ok.php?genreId=" + genreId;
  }

  return false;
}

function modGenre(genreId, genreName) {
  txtGenreName.value = genreName;
  btn
}

function sortList(type) {
  location.href = "index.php?sortType=" + type;
}

//frmGenre.addEventListener('submit', function() {});