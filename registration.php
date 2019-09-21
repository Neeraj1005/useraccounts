<?php 
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div>
		<?php
		if(isset($_POST['create'])){
			$firstname 		=$_POST['firstname'];
			$lastname 		=$_POST['lastname'];
			$email 			=$_POST['email'];
			$phone 			=$_POST['phone'];
			$password 		=$_POST['password'];

			//Begin sql feed
			$sql = "INSERT INTO users (firstname, lastname, email, phone, password) VALUES(?,?,?,?,?)";
			$stmtinsert = $db->prepare($sql);
			$result = $stmtinsert->execute([$firstname, $lastname, $email, $phone, $password]);
			if($result){
				echo "Succefully feed";
			}else{
				echo "There is an error";
			}
			//End sql feed
			//echo $firstname ."" . $lastname ."" . $email ."" . $password;
		}			
		?>
	</div>
	<div>
		<form action="registration.php" method="post">
			<div class="container">

				<div class="row">
					<div class="col-sm 3">
					<h1>Registration</h1>
					<p>Fill up the form with validation</p>

					<hr class="mb-3">
					<label for="firstname"><h3>First Name</h3></label>
					<input class="form-control" type="text" name="firstname" required="">

					<label for="lastname"><h3>Last Name</h3></label>
					<input class="form-control" type="text" name="lastname" required="">

					<label for="email"><h3>Email</h3></label>
					<input class="form-control" type="email" name="email" required="">

					<label for="phone"><h3>Phone</h3></label>
					<input class="form-control" type="text" name="phone" required="">

					<label for="password"><h3>Password</h3></label>
					<input class="form-control" type="password" name="password" required="">
					<hr class="mb-3">

					<input class="btn btn-primary" type="submit" name="create" value="Sign Up">
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>