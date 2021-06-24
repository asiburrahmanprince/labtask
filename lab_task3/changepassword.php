<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$passwordErr = $cpasswordErr = $npassword = "";
		$password = $cpassword = $npassword = "";


		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
		    $password = test_input($_POST["password"]);
		    $cpassword = test_input($_POST["cpassword"]);
		    $npassword = test_input($_POST["npassword"]);
		    if (strlen($_POST["password"]) <= '8') {
		        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
		    }
		    elseif(!preg_match("#[0-9]+#",$password)) {
		        $passwordErr = "Your Password Must Contain At Least 1 Number!";
		    }
		    elseif(!preg_match("#[A-Z]+#",$password)) {
		        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
		    }
		    elseif(!preg_match("#[a-z]+#",$password)) {
		        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
		    }
			}
			elseif(!empty($_POST["password"])) {
			    $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
			} else {
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
	<form>
		<table>
			<tr>
				<td>
					Current Password :
				</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					New Password :
				</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					Retype New Password :
				</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
		</table>
		<hr size="8" width="25%" color= "gray" text align="left">
		<input type="submit" name="submit" value="submit">
	</form>
	<?php 
		echo $password;
		echo "<br>";
		echo $cpassword;
		echo "<br>";
		echo $npassword;

	 ?>
</body>
</html>