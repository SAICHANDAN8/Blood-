<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";	
    $dbname = "blood";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $blood_group = $_POST['blood_group'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `donar` (`name`, `email`, `phone`, `blood_group`, `address`) 
    VALUES ('$name', '$email', '$phone', '$blood_group', '$address')";

    if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Requests added successfully ');</script>";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration Form</title>
	<link rel="stylesheet" type="text/css" href="donar.css">
</head>
<body>
	<div class="container">
		<form method="post" action="donar.php"   onsubmit="callvalue">
			<h2>Donor Registration Form</h2>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			<label for="phone">Phone Number:</label>
			<input type="text" id="phone" name="phone" required>
			<label for="blood_group">Blood Group:</label>
			<select id="blood_group" name="blood_group" required>
				<option value="">-- Select --</option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
			</select>
			<label for="address">Address:</label>
			<textarea id="address" name="address" required></textarea>
			<input type="submit" name="submit" value="Register" onclick="Sucessfull">
		</form>
	</div>
</body>
</html>
