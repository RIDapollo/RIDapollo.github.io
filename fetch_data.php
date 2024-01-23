<?php
// Database connection parameters
$host = "localhost:3306";
$username = "root";
$password = "jg23518957jh!";
$dbname = "info_table";

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the "info_table" table
$sql = "SELECT * FROM info_table";
$result = $conn->query($sql);

// Display data in HTML table
if ($result->num_rows > 0) {
    echo "<tr>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Discord</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['mb_name'] . "</td>";
        echo "<td>" . $row['mb_add'] . "</td>";
        echo "<td>" . $row['mb_mail'] . "</td>";
        echo "<td>" . $row['mb_tell'] . "</td>";
        echo "<td>" . $row['mb_discord'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No data found</td></tr>";
}

// Close the connection
$conn->close();
?>