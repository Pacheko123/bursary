
<?php include('includes/static.php'); ?>

<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar ">
  <!-- Navbar brand -->
  <div class="container">
    <a class="navbar-brand" href="index.php">E Bursary.</a>
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
            <a class="nav-link" href="register.php">REGISTER</a>
          </li>
          <li class='nav-item'>
            <a class="nav-link" href="login.php">LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">POLICY</a>
          </li>
        </ul>

      </div>
      <!-- Collapsible content -->
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Enter email" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Subscribe</button>
    </form>
</div>
</nav>

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

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>Dont have an account yet?<a href="login.php">LOGIN</a>
</form>
</div>
</div>
</div>
</body>
</html>
