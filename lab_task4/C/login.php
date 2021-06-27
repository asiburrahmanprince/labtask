<form action="welcome.php" method="post">



	<h3>LOGIN</h3>
	<table>
		<tr>
			<td>
				Username:
			</td>
			<td>
				 <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
			</td>
		</tr>
		<tr>
			<td>
				Password: 
			</td>
			<td>
				 <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
			</td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="remember" /> Remember me
			</td>
			<td>
				
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Submit">
			</td>
			<td>
				<p><a href="login.php">Forget password</a></p>
			</td>
		</tr>
		
	</table>
	
		
	

		
	
	
	
</form>