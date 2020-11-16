

 <?php
  require('connect.php');
  session_start();
  $email = $_POST['mail'];
  $password = $_POST['password'];

  $query = "SELECT * FROM student WHERE pass = '$password' AND stud_mail = '$email'";
  $result = mysqli_query($con,$query);

  if($row = mysqli_num_rows($result) >0){
    
    $member =  mysqli_fetch_assoc($result);
    $db_mail = $row['stud_mail'];
    $db_pass = $row['pass'];
    $_SESSION['SESS_NAME'] = $member['stud_mail'];
    $rank = $member['rank'];

    if ($rank = 'administrator') {  
      header("Location: admin.php");
    }else {
      header("Location: student.php");
    }
  }else{

    echo "Invalid username or Email";
  }
  

 ?>
