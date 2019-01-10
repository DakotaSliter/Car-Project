<?php
//save input field as name
if(isset($_POST['submit'])) {

	if($_POST['password'] == $_POST['verify_password']) {
		$name = $_POST['first_name'];
		$password = $_POST['password'];
		echo "Sign-Up Successful!<br>
			  Username: $name<br>
	  		  Password: $password<br>";
	} else {
		echo "Passwords do not match, try again!";
	};
};

?>