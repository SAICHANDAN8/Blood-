<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blood";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $blood_group = $_POST['blood_group'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    
    // Prepare SQL query
    $sql = "INSERT INTO Inventory (name, email, blood_group, contact, address)
            VALUES ('$name', '$email', '$blood_group', '$contact', '$address')";
    
    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Inventory details added successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close connection
    $conn->close();
}
?>
























<!DOCTYPE html>
<html>
<head>
	<title>Inventory Registration Form</title>
	<style>
		.container {
			width: 400px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		h2 {
			text-align: center;
		}

		label {
			display: block;
			margin-bottom: 5px;
		}

		input[type="text"],
		input[type="email"],
		select,
		textarea {
			width: 100%;
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 10px;
		}

		textarea {
			height: 80px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 15px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<div class="container">
		<form method="post" action="Inventory.php">
			<h2>Inventory Registration Form</h2>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			<label for="blood_group">Blood Group:</label>
			<select id="blood_group" name="blood_group" required>
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
			<input type="text" id="contact" name="contact" required>
			<label for="address">Address:</label>
			<textarea id="address" name="address" required></textarea>
			<input type="submit" value="Register">
		</form>
	</div>
</body>
</html>
