
<?php
$servername = "localhost";
$username = "hye0";
$password ="hye1218";
$db = "movie";

$conn = new mysqli($servername, $username,$password,$db);

  $id = $_POST[ 'id' ];
  $password = $_POST[ 'password' ];
  $passwordCh = $_POST[ 'passwordCh' ];
  $name = $_POST[ 'name' ];
  $tel = $_POST[ 'tel' ];
  $birth = $_POST[ 'birth' ];
  $email = $_POST[ 'email' ];

  if ( !is_null( $id ) ) {
    $conn = mysqli_connect( 'localhost', 'root', 'hye0', 'movie' );
    $sql = "SELECT ID FROM MEMBER WHERE ID = '$id';";
    $result = mysqli_query( $conn, $sql );
    while ( $row = mysqli_fetch_array( $result ) ) {
      $id_e = $row[ 'ID' ];
    }
    if ( $id == $id_e ) {
      $wi = 1;
    } elseif ( $password != $passwordCh) {
      $wp = 1;
    } else {
      $encrypted_password = password_hash( $password, PASSWORD_DEFAULT);
      $sql_add_user = "INSERT INTO MEMBER ( ID, PASSWORD, NAME, TEL, BIRTH, EAMAIL ) VALUES ( '$username', '$encrypted_password',$name, $tel, $birth, $email );";
      mysqli_query( $conn, $sql_add_user );
    //   header( 'Location: register-ok.php' );
    }
  }
?>