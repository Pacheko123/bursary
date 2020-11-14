
<?php include('includes/static.php'); ?>

<html>
<head>

	<meta name="viewport" content="width=device-width">
	<title>BURSARY APPLICATION | WELCOME</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
<form method="post" action="auth.php">
      <h2>STUDENT SIGN UP</h2>
      <div class="form-group">
        <div class="form-group">
          <label for="exampleInputPassword1" >Name</label>
          <input type="text" class="form-control" name="name">
        </div>
        <label for="exampleInputEmail1" >Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" >National ID</label>
        <input type="number" class="form-control" name="id">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" >Phone Number</label>
        <input type="number" class="form-control" name="phone">
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
        <label for="exampleInputPassword1" >Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" >Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="c_password">
      </div>

      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>Dont have an account yet?<a href="login.php">LOGIN</a>
</form>
</div>
</div>
</div>
</body>
</html>
