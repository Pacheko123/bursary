<?php
  require('connect.php');
  if(isset($_POST['submit'])){

    $phone =  $_POST['phone'];
    $name =  $_POST['name'];
    $email =  $_POST['mail'];
    $password =  $_POST['password'];
    $password_confirm =  $_POST['c_password'];
    $id =  $_POST['id'];
    $gender =  $_POST['gender'];

    $query = "insert into student(stud_name,stud_mail,pass,id,gender,phone) values('$name','$email','$password','$id','$gender','$phone')";
    $result = mysqli_query($connect,$query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($connect), E_USER_ERROR);
}



 ?>
