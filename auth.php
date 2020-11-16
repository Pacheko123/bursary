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

    $result = mysqli_query($con,$query);
    if ($result) {
        header("Location: login.php");
    }else{
         echo "failed. " .mysqli_error();
    }
}



 ?>
