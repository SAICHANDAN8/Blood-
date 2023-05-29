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
$sql = "SELECT * FROM Inventory";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Details</title>
</head>
<body>
    <h2>Inventory Details</h2>

    <?php
    if ($result->num_rows > 0) {
        // Output data for each row
        while ($row = $result->fetch_assoc()) {
            echo "<p>Name: " . $row["name"] . "</p>";
            echo "<p>bloodgroup: " . $row["blood_group"] . "</p>";
            echo "<p>quantity: " . $row["quantity"] . "</p>";
            echo "<p>expirydate: " . $row["expirydate"] . "</p>";
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

