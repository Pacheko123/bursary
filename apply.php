<!-- Default form login -->
<?php
if(!isset($_SESSION)) {
session_start();
  }
  ?>
<?php include("includes/static.php"); 
include("connect.php"); 


 $sess=$_SESSION['SESS_NAME'];
?>
<?php
if(isset($_POST['save'])){
 
   $check= mysqli_query($con, "SELECT * FROM applications WHERE applicant= '$sess' AND status='applied'")or die(mysqli_error($con));
      if(mysqli_num_rows($check)>0){
    echo" You have already Applied for the bursary ";
  exit();
}      
    $year=$_POST['year'];
   $dependency1=$_POST['dependency1'];
     $dependency2=$_POST['dependency2'];
    $constituency=$_POST['constituency'];
   $amount=$_POST['amount'];
    
$sess=$_SESSION['SESS_NAME'];
    $user=mysqli_query($con,"INSERT INTO applications(year, dependency1,dependency2, constituency,applicant,amount,status) VALUES ('$year','$dependency1','$dependency2','$constituency', '$sess','$amount',  'applied')") or die(mysqli_error($db));
      
      echo '<div class="alert alert-success" role="alert">
  Applicaton successfully received!.
</div>';

    // $_session['message']="Your Applicaton Was received.";
  
           
    //header('location:home.php');
   }
?>

<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar ">
<!-- Navbar brand -->
<div class="container">
  <a class="navbar-brand" href="student.php">E bursary.</a>
    <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="apply.php">APPLY</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">VIEW STATEMENTS</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link " href="#">NOTIFICATIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-toggle="popover" data-container="body" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus." href="#">VIEW PROFILE</a>
        </li>
      </ul>

    </div>
    <!-- Collapsible content -->
    
</div>

</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 ">

<form class="text-center border border-light p-5 align-center ml-7" action="apply.php" method="post">

    <p class="h4 mb-4">Loan application</p>

    <!-- Email -->
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Year of Study" name="year">
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Dependency1(phone)" name="dependency1">
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Dependency2(phone)" name="dependency2">
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Constituency" name="constituency">
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Amount" maxlength="5" name="amount">

    <button class="btn btn-info btn-block my-4" type="submit" name="save">SUBMIT APPLICATION</button>
</form>
<!-- Default form login -->
</div>
</div>
</div>