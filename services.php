<!DOCTYPE html>
<html>

<head>
  <?php include('includes/static.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1>ONLINE BURSARY APPLICATION</h1>

			</div>
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li class="current"><a href="services.php">SERVICES</a></li>
          <li class="current"><a href="login.php">LOGIN</a></li>
          <li class="current"><a href="register.php">REGISTER</a></li>
				</ul>
			</nav>

		</div>
	</header>

	<section id="main">
		<div class="container">
			<article id="main-col">
				<h2 class="page-title">Services</h2>

				<ul id="services">
					<li>
						<h1>APPLY NOW!</h1>
						<div class="Personal">
						<h3>Enter Personal Details</h3>

						<form action="services.php" method="post">
					<p> Full Name</p><input type="text"  name="name"  required="" id="name1" onfocusout="f1()" />
					<p>ID No.</p><input type="id"  name="idno"  required="" id="id" onfocusout="f1()"/>
                    <p>Email</p><input type="email"  name="email"  placeholder="example@gmail.com" onfocusout="f1()"/>
					<p>Home Address</p><input type="text"  name="address"  required="" id="addr" onfocusout="f1()"/>
					</div>

					<div class="left-w3-agile">
						<p>Gender</p><select class="form-control" name="gender">
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						</select>
					</div>
					<div class="right-agileits">
						<p>Phone</p><input type="text"  name="phone_number" minlength="10" maxlength="10" id="mobno" onfocusout="f1()"/>
						<button type="Save" class="Save">Save</button>
					</div>

					<div class="left-w3-agile">
						<p>Reasons for Application</p><select class="form-control" name="Reason">
							<option>Orphaned</option>
							<option>Disabled</option>
							<option>Marginalised</option>
							<option>Poor Guardians</option>

						</select>
						<div id="message">
							<section id="feeder">
								<h3>Financial Bckground</h3>

								<textarea name="comment" rows="5" cols="40"></textarea>

							</section>

						</div>

					</div>

				</form>

				          <h3>Institution Details</h3>

				          <form action="#" method="post">
					           <p>Enter Name</p><input type="text"  name="name"  required="" id="name1" onfocusout="f1()" />
					           <p>Reg No.</p><input type="text"  name="reg-no"  required="" id="reg-no" onfocusout="f1()"/>
                               <p>Department</p><input type="text"  name="department" onfocusout="f1()"/>
					           <p>Instituition Address</p><input type="text"  name="adress"  required="" id="addr" onfocusout="f1()"/>
                               <button type="Save" class="Save">Save</button>
                           </form>

                              <div id="Account">
                           <h3>Account Details</h3>

                           <form action="#" method="post">
					           <p> Account  Name</p><input type="text"  name="acc-name"  required="" id="acc-name1" onfocusout="f1()" />
					           <p>Account No.</p><input type="text"  name="acc-no"  required="" id="acc-no" onfocusout="f1()"/>
					           <button type="Save" class="Save">Save</button>

                           </form>
                           </div>

                           <h3>Official Use Only</h3>

                           <form>
                           	<p>Bursary Manager</p>
                           	<input type="text"  name="name">
                           <input type="button" value="Approve" name="ap">
                           <input type="button" value="Reject" name="rej">
                           </form>

					</li>

				</ul>

			</article>

		</div>

	</section>

	<footer>
    <p>Bursary System Copyright &copy; <?php echo date('Y'); ?> </p>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<form>
						<input type="email" placeholder="Enter email for feeds">
						<button type="subscribe" class "button">Subscribe</button>

						</div>
					</div>
				</div>
	</footer>

</body>
</html>
