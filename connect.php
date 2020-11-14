
<?php
  $server = 'localhost';
  $user = 'root';
  $password = "";

  $connect = mysqli_connect($server,$user,$password,'fund');
  if($connect){
    echo 'success connection';
  }
?>
