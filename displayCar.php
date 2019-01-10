<?php
if(isset($_POST['submit'])) {
	
	$car = $_POST['car'];
	echo "<p style='text-align: center'>Here is more info on the <b>Infiniti ".$car.":</b>";
    $new_conn = new mysqli($hn, $user, $pw, $db);
	$selected_car = "SELECT Model, Price, Zero60, Gas_Mileage, Picture FROM Infiniti WHERE Model='$car'";
	//perform query with selected car
	$grab_data = $new_conn->query($selected_car);
	//store info from slected car in variable array
	$data_array = $grab_data->fetch_array(MYSQLI_ASSOC);
	//store each piece of data in a variable
	$price = $data_array['Price'];
	$zero60 = $data_array['Zero60'];
	$gas_mileage = $data_array['Gas_Mileage'];
	$picture = $data_array['Picture'];

echo <<<_END

	<div style="width: 500px; text-align:center; margin: 50px auto; position: relative">
		
		<div style="float: left; height: 100%">
			<h3>Price:</h3>
				<p>\$$price</p>
			<h3>Zero-to-60:</h3>
				<p>$zero60 seconds</p>
			<h3>Gas Mileage:</h3>
				<p>$gas_mileage mpg</p>
		</div>

		<div style="float: right; height: 100%">
			<img src="$picture" style="width: 300px;"
		</div>

	</div>
_END;

$new_conn->close();
$grab_data->close();

}

?>