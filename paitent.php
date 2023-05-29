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
    $age = $_POST['age'];
    $blood_group = $_POST['blood_group'];
    $diseases = $_POST['diseases'];
	$contact = $_POST['contact'];
    $address = $_POST['address'];


    $sql = "INSERT INTO `paitents` ( `name`, `email`, `age`, `blood_group`, `diseases`, `contact`, `address`) 
    VALUES ( '$name', '$email', '$age', '$blood_group','$diseases', '$contact', '$address')";

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Paitent added successfully ');</script>";
	}
	else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>paitent Registration Form</title>
	<link rel="stylesheet" type="text/css" href="paitent.css">
</head>
<body>
	<div class="form-container">
		<h2>Patient Registration Form</h2>
		<form action="paitent.php" method="post">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" required>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required>
            <label for="name">age:</label>
			<input type="text" name="age" id="age" required>
			<label for="blood_group">Blood Group:</label>
			<select name="blood_group" id="blood_group" required>
				<option value="">Select Blood Group</option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
			</select>
            <label for="diseases">Blood Group:</label>
			<select name="diseases" id="diseases" required>
				<option value="">Select diseases</option>
				<option value="Dengue">Dengue</option>
				<option value="Typhid">Typhid</option>
				<option value="Malaria">Malaria</option>
				<option value="Cancer">Cancer</option>
				<option value="None of the above">None of the obove</option>
			</select>
			<label for="contact">Contact Number:</label>
			<input type="text" name="contact" id="contact" required>
			<label for="address">Address:</label>
			<textarea name="address" id="address" rows="4" required></textarea>
			<input type="submit" value="Register">
		</form>
	</div>
</body>
</html>
