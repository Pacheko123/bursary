<?php
  require('connect.php');
  $email = $_POST['mail'];
  $password = $_POST['password'];

  $query = "SELECT stud_mail,pass FROM student ";
  $result = mysqli_query($connect,$query);

  while($row = mysqli_fetch_array($result)){
    $db_mail = $row['stud_mail'];
    $db_pass = $row['pass'];

    if ($db_mail==$email & $db_pass==$password) {
      // code...
      header("Location: dashboard@student.php");
    }else {

      echo "string";
    }
  }

 ?>
