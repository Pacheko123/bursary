<?php include("includes/static.php"); 
include("connect.php");
session_start();
?>


<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar ">
<!-- Navbar brand -->
<div class="container">
  <a class="navbar-brand" href="admin.php">E Bursary.</a>
    <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <!--li class='nav-item'>
          <a class="nav-link" href="admin.php">HOME</a>
        </li>-->
        <li class='nav-item'>
          <a class="nav-link" href="admin.php">CREATE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">APPLICATIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
      </ul>

    </div>
    <!-- Collapsible content -->
</div>
</nav>

<form method="post" action="admin.php">
<?php 
$sess=$_SESSION['SESS_NAME'];
$count = 1;
$result=mysqli_query($con,"SELECT *FROM applications"); ?>

<div class="table-responsive text-nowrap">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Application No</th>
        <th scope="col">Applicant</th>
        <th scope="col"> Amount</th>
         <th scope="col">Year of Study</th>
         <th scope="col">Date Applied</th>
        <th scope="col">Status</th>
        <th scope="col">Verify</th>
        

      </tr>
    </thead>
    <tbody>
      <tr>
        <!--th scope="row">1</th>-->
         <?php while ($row=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['id']; ?></td>
             <td><?php echo $row['applicant']; ?></td>
              <td><?php echo $row['amount']; ?></td>
               <td><?php echo $row['year']; ?></td>
              <td><?php echo $row['applied_date']; ?></td>
               <td><?php echo $row['status']; ?></td>
              <td><div class="form-check">

    <input type="checkbox" class="form-check-input" id="exampleCheck1" value="<?php echo $row['id']; ?>" name="verify[]" >
    <label class="form-check-label" for="exampleCheck1"  ></label>
  </div></td>
             </tr>
           <?php }?>
       
       
      </tr>
    
    </tbody>
  </table>

</div>

</form>

<div class="row">
  <div class="col-md-2 offset-md-10">
    <button class="btn btn-dark" name="allocate"> VERIFY APPLICATIONS</button>
  </div>
</div>

  
  <?php 
if (isset($_POST['allocate'])) {
  
  if (!empty($_POST['verify'])) {
    foreach ($_POST['verify'] as $selected) {
      echo $selected ."</br>";
    }
    
  }
}


?>




