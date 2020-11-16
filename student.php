
<?php 
if(!isset($_SESSION)) {
session_start();
  }
include("includes/static.php");
include("connect.php");  ?>

<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar ">
<!-- Navbar brand -->
<div class="container">
  <a class="navbar-brand" href="admin.php">E bursary.</a>
    <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class='nav-item'>
          <a class="nav-link" href="admin.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="apply.php">APPLY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">VIEW STATEMENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="notification.php">NOTIFICATIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-toggle="popover" data-container="body" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus." href="logout.php">LOGOUT</a>
        </li>
      </ul>

    </div>
    <!-- Collapsible content -->
    
</div>

</nav>
  <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-8" style="color: green;">
          Welcome <b><?php echo $_SESSION['SESS_NAME']; ?></a><hr>

     </div>
   </div>
   <?php 
$sess=$_SESSION['SESS_NAME'];
$count = 1;
$result=mysqli_query($con,"SELECT *FROM applications where applicant='$sess'"); ?>

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
        <

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
                
             
              <!-- <td><div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" value="">
    <label class="form-check-label" for="exampleCheck1"></label>
  </div></td> -->
             </tr>
           <?php }?>
       
       
      </tr>
    
    </tbody>
  </table>

</div
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript">// Animations init
  new WOW().init();
</script>


