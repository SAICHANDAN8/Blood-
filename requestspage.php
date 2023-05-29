<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the table
$sql = "SELECT * FROM requests";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Details</title>
</head>
<body>
    <h2>Blood requests Details</h2>

    <?php
    if ($result->num_rows > 0) {
        // Output data for each row
        while ($row = $result->fetch_assoc()) {
            echo "<p>ID: " . $row["id"] . "</p>";
            echo "<p>Name: " . $row["name"] . "</p>";
            echo "<p>Email: " . $row["email"] . "</p>";
            echo "<p>bloodgroup: " . $row["blood_group"] . "</p>";
            echo "<p>address: " . $row["address"] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "No data found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>

