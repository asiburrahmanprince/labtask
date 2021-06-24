<!DOCTYPE html>
<html>
<head>
	<style>
	.error {color: #FF0000;}
	</style>

</head>
<body>
	<?php
		
		$usernameErr = $passwordErr = "";
		$username = $password = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if (empty($_POST["username"])) {
			$usernameErr = "Name is required";
			} else {
			$username = test_input($_POST["username"]);
			
			if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
			$usernameErr = "Only letters and white space allowed";
			$username ="";
			}
			}
			if(!empty($_POST["password"])) {
				$passwordErr = "Password is required";
			} 
			else 
		    $password = test_input($_POST["password"]);
		    
		    if (strlen($_POST["password"]) <= '8') 
		        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
		    
		    elseif(!preg_match("#[0-9]+#",$password)) {
		        $passwordErr = "Your Password Must Contain At Least 1 Number!";
		    }
		    elseif(!preg_match("#[A-Z]+#",$password)) {
		        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
		    }
		    elseif(!preg_match("#[a-z]+#",$password)) {
		        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
		    }
			
			else {
			     $passwordErr = "Please enter password   ";
			}
		
			
		}

		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}

	?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
				<td>
					User Name :
				</td>
				<td>
					<input type="text" id="username" name="user name"  title="">
				</td>
			</tr>
			<tr>
				<td>
					Password :
				</td>
				<td>
					<input type="Password" id="password"  title="">
				</td>
			</tr>

		</table>
		<hr size="8" width="25%" color= "gray" text align="left">
		<input type="checkbox" id="remeber" name="remeber me" value="remeber me">
		<label for="remeber">Remember Me</label>
		<br>
		<input type="submit" name="submit" value="submit">
	</form>

	<?php


		
		echo $username;
		echo "<br>";
		echo $password;
		

	?>
</body>
</html>