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
$sql = "SELECT * FROM reports ";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Details</title>
</head>
<body>
    <h2>Reports Details</h2>

    <?php
    if ($result->num_rows > 0) {
        // Output data for each row
        while ($row = $result->fetch_assoc()) {
            echo "<p>reporttype: " . $row["reportType"] . "</p>";
            echo "<p>startDate: " . $row["startDate"] . "</p>";
            echo "<p>endDate: " . $row["endDate"] . "</p>";
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

