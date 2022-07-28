<?php
//mysqli_connect("","username","passd","dbname")
// mysqli_connect("localhost","hye0","hye0","opentutorials");

$sql = "
    INSERT INTO topic
        (title, description, created)
        VALUES(
            '{$_POST['title']}',
            '{$_POST['description']}',
            NOW()
        )
";
echo $sql;
?>