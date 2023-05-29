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

    $sql = "INSERT INTO `Donars` ( `name`, `email`, `age`, `blood_group`, `contact`, `address`) 
    VALUES ( '$name', '$email', '$age', '$blood_group', '$contact', '$address')";

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Donor added successfully ');</script>";
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
	<title>Doner Details</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
			color: #333;
		}
		table {
			margin: auto;
			margin-top: 30px;
			border-collapse: collapse;
			background-color: #fff;
			box-shadow: 0px 0px 10px #ccc;
		}
		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
			color: #333;
		}
		td {
			color: #666;
		}
	</style>
</head>
<body>
	<h1>Personal Details</h1>
	<table>
		<tr>
			<th>Name:</th>
			<td><?php echo $name; ?></td>
		</tr>
		<tr>
			<th>Email:</th>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<th>Age:</th>
			<td><?php echo $age; ?></td>
		</tr>
		<tr>
			<th>Blood Group:</th>
			<td><?php echo $blood_group; ?></td>
		</tr>
		<tr>
			<th>Contact:</th>
			<td><?php echo $contact; ?></td>
		 </tr>
		<tr>
			<th>Address:</th>
			<td><?php echo $address; ?></td>
		</tr>
	</table>
</body>
</html>
