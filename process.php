<?php 
require_once('config.php');
?>
<?php 
if(isset($_POST)){
			$firstname 		=$_POST['firstname'];
			$lastname 		=$_POST['lastname'];
			$email 			=$_POST['email'];
			$phone 			=$_POST['phone'];
			$password 		=sha1($_POST['password']);

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
}else{
	echo "No Data";
}