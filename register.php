<html>
	<head>
		<title>IITR Bank</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="banking.css">
	
	</head>
	<body>
		<div class="container">
			<h1 class="float-left">IITR Bank</h1>
			<h1 class="float-right">IITR</h1>
			<br>
			<br>
			<br>
			<hr>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			  	<div class="navbar-header">
			      <a class="navbar-brand" href="#">Home</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="#">Register</a></li>
			      <li><a href="#">Products</a></li>
			      <li><a href="#">Services</a></li>
			      <li><a href="#">Contact</a></li>
			    </ul>
			  </div>
			</nav>
			<br>
			<div class="col-md-12">
				<div class="col-md-4">
					<form>
						<div class="form-group">
						  <label for="name">Customer's Name:</label>
						  <input type="text" class="form-control" id="name" required>
						  <label for="optradio">Gender:</label>
						  <br>
							<div class="radio">
							<label><input type="radio" name="optradio" active>M</label>
							</div>
							<div class="radio">
							<label><input type="radio" name="optradio">F</label>
							</div>
							<br><br>
							<label for="dob">DOB:</label>
						  	<input type="date" class="form-control" id="dob" required>
						  	<label for="minval">Minimum Amount:</label>
						  	<input type="text" class="form-control" id="minval" value = 1000 min = 1000 required>
						  	<label for="mobile">Mobile:</label>
						  	<input type="text" class="form-control" id="mobile" required>
						  	<label for="email">Email:</label>
						  	<input type="email" class="form-control" id="email" required>
							<label for="password">Password:</label>
						  	<input type="password" class="form-control" id="password" required>
							</div>
						<br>
						<button type="submit" class="btn btn-primary text-center"><a href="index.php" class="a-btn">Register</a></button>
						<!-- <button type="submit" class="btn btn-primary ml-70">Refresh</button> -->
					
					</form>

				</div>
				<div class="col-md-8">
					
				</div>
			</div>


		</div>
		<!-- <h1>Hello HTML</h1>
		<?php
			echo "<h4>Hello php !</h4>";
		?> -->

	</body>
<html>