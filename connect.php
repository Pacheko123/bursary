
<?php
  $server = 'localhost';
  $user = 'root';
  $password = "";

  $con = mysqli_connect($server,$user,$password,'fund')or die ("error" . mysqli_error($con));
  
?>
