<?php

require_once 'login.php';

//connect to mysql and pass in login variables
$conn = new mysqli($hn, $user, $pw, $db);

//error handling
if($conn->connect_error) die("Fatal Error");

//create our query string and store in a variable
$query = "SELECT * FROM Infiniti";

//pass our query into the function query() on object $conn
$result = $conn->query($query);

//set rows = to the num_rows property of the $result object
$rows = $result->num_rows;

//create form
echo "<form action='test.php' method='POST' style='text-align: center; margin-top: 20px'>";
	
//create select menu and give it a name
echo "<select name='car' style='display: block; margin: 20px auto'>";

//use a loop to go through each row in the table
for($j = 0; $j < $rows; ++$j) {
	
	//assign associative array on $result to new var $row
	$row = $result->fetch_array(MYSQLI_ASSOC);
	
	//save submitted Model to variable
	$value = htmlspecialchars($row['Model']);
	
	//display each array Model as an option in select
	echo "<option value='$value'>$value</option>";	
};

echo "</select>";

echo "<input type='submit' name='submit'></form>";

//close objects for cleanup
$result->close();
$conn->close();

//contains code to display info from selected car using another databse query
require_once 'displayCar.php';

?>




