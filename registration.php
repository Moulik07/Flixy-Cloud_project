<?php 
require_once("config.php");
if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email 	= $_POST['email'];
		$password = $_POST['password'];
		
		$options = array("cost"=>4);
		$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
		
		$sql = "insert into accounts (username, email, password) value('".$username."', '".$email."','".$hashPassword."')";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			echo "Registration successfully";
		}
	}
?>
<!DOCTYPE html>  
 <html>
      <body>  
<h1>Register On Flixy Now!!</h1>
 
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     <input type="text" name="username" value="" placeholder="Username">
	<input type="text" name="email" value="" placeholder="Email">
	<input type="password" name="password" value="" placeholder="Password">
	<button type="submit" name="submit">Submit</button>
</form>
      </body>  
 </html>  