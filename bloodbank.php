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
    $blood_group = $_POST['blood_group'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];


    $sql = "INSERT INTO `BloodBank` ( `name`, `email`, `blood_group`, `contact`, `address`) 
    VALUES ( '$name', '$email', '$blood_group', '$contact', '$address')";

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Blood bank added successfully ');</script>";
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
	<title>Blood Bank Registration Form</title>
	<link rel="stylesheet" type="text/css" href="bloodbank.css">
</head>
<body>
	<div class="form-container">
		<h2>Blood Bank Registration Form</h2>
		<form action="bloodbank.php" method="post">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" required>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required>
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
			<label for="contact">Contact Number:</label>
			<input type="text" name="contact" id="contact" required>
			<label for="address">Address:</label>
			<textarea name="address" id="address" rows="4" required></textarea>
			<input type="submit" value="Register">
		</form>
	</div>
</body>
</html>
