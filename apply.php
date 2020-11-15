<!-- Default form login -->
<?php include("includes/static.php"); ?>

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

<form class="text-center border border-light p-5 align-center ml-7" action="#!">

    <p class="h4 mb-4">Loan application</p>

    <!-- Email -->
    <input type="number" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Year of Study">
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Dependency1(phone)">
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Dependency2(phone)">
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Constituency">
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Amount" maxlength="5">

    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
</form>
<!-- Default form login -->
</div>
</div>
</div>