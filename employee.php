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
    $contact = $_POST['contact'];
    $address = $_POST['address'];


    $sql = "INSERT INTO `employee` ( `name`, `email`, `age`, `blood_group`, `contact`, `address`) 
    VALUES ( '$name', '$email', '$age', '$blood_group', '$contact', '$address')";

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('employee added successfully ');</script>";
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
	<title>Blood employee Registration Form</title>
	<link rel="stylesheet" type="text/css" href="employee.css">
</head>
<body>
	<div class="form-container">
		<h2>Employee Registration Form</h2>
		<form action="employee.php" method="post">
			<label for="name"> Employee Name:</label>
			<input type="text" name="name" id="name" required>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required>
            <label for="name">age:</label>
			<input type="text" name="age" id="age" required>
            <label for="designation">Blood Group:</label>
			<input type="text" name="blood_group" id="blood_group" required>
			<label for="contact">Contact Number:</label>
			<input type="text" name="contact" id="contact" required>
			<label for="address">Address:</label>
			<textarea name="address" id="address" rows="4" required></textarea>
			<input type="submit" value="Register">
		</form>
	</div>
</body>
</html>
