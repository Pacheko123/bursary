<?php 
if(!isset($_SESSION)) {
session_start();
  }
?>
<?php include('includes/static.php');
include("connect.php"); ?>
	<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar ">
  <!-- Navbar brand -->
  <div class="container">
    <a class="navbar-brand" href="#">E Bursary.</a>
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
		        	<a class="nav-link" href="apply.php">APPLICATIONS</a>
		      </li>
					<li class='nav-item'>
						<a class="nav-link" href="logout.php">LOGOUT</a>
					</li>
					
		    </ul>

		  </div>

		  <!-- Collapsible content -->
		  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
    </form>
</div>
</nav>
<div class="container">
<div class="row">
	 <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-8" style="color: green;">
          Welcome <b><?php echo $_SESSION['SESS_NAME']; ?></a><hr>

     </div>
   </div>
</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
	




</div>
</div>
</div>



<?php include('includes/static.php');

$sess=$_SESSION['SESS_NAME'];
$count = 1;
$result=mysqli_query($con,"SELECT * FROM student where stud_mail='$sess'"); ?>
 

<html>
<head>

  <meta name="viewport" content="width=device-width">
  <title>BURSARY APPLICATION | WELCOME</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">

</head>
<body>
 
<!--div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
<form method="post" action="auth.php">
      <h2>YOUR PROFILE</h2>
      <div class="form-group">
        <div class="form-group">
          <label for="exampleInputPassword1" >Name</label>
          <input type="text" class="form-control" name="name" value="">
        </div>
        <label for="exampleInputEmail1" >Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" value="<?php echo $_SESSION['SESS_NAME']; ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      
      <div class="form-group">
        <label for="exampleInputPassword1" >Phone Number</label>
        <input type="number" class="form-control" name="phone" value="<?php echo $phone ?>">
      </div>
      <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>
  </div>
      <div class="form-group">
        <label for="exampleInputPassword1" >Current Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="(<?php echo ucfirst($user['password']); ?>)">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" >New Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="c_password">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">REQUEST EDIT</button>
</form>
</div>
</div>
</div>-->
<?php
$count = 1;
$result=mysqli_query($con,"SELECT * FROM student where stud_mail='$sess'")or die(mysqli_error($con)); ?>
 <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Admission NUmber</th>
        <th scope="col">Political Party</th>
         <th scope="col">Phone</th>
        <th scope="col">Seat</th>
        <th scope="col">Year of Study</th>
        <th scope="col">Verify</th>

      </tr>
    </thead>
    <tbody>
      <tr>
 
                 <?php while ($row=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['stud_name']; ?></td>
             <td><?php echo $row['asp_adm']; ?></td>
              <td><?php echo $row['party']; ?></td>
              <td><?php echo $row['phone']; ?></td>
               <td><?php echo $row['asp_seat']; ?></td>
                <td><?php echo $row['year']; ?></td>
             
              <td><div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" value="">
    <label class="form-check-label" for="exampleCheck1"></label>
  </div></td>
             </tr>
           <?php }?>
       
</body>
</html>


<!-- jQuery -->
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


