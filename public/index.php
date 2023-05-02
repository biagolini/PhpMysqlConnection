<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Get database configuration from environment variables
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$dbname = getenv('DB_NAME');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
// Connect to the database
$conn = new mysqli($host, $username, $password, $dbname, $port);
// Check for connection errors and display an error message if any
if ($conn->connect_error) {
    die("Could not connect to the database: " . $conn->connect_error);
}
// Define the SQL query to fetch the first 30 records from the tblTypeState table
$sql = "SELECT * FROM tblTypeState LIMIT 30";
$result = $conn->query($sql);
// Start rendering the HTML output for the results table
echo '
<div class="container">
    <h1 class="mt-4 mb-4">Result</h1>
    <table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Abbreviation</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>';
// Check if the query returned any rows and display them in the table
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["idTypeState"]."</td>
        <td>".$row["dsAbbreviation"]."</td>
        <td>".$row["dsType"]."</td>
        </tr>";
    }
} else {
    // If no rows were returned, display a "No results found" message
    echo "<tr><td colspan='3'>No results found.</td></tr>";
}
// Close the table body, table, and container div elements
echo '
    </tbody>
    </table>
</div>';
// Close the database connection
$conn->close();
?>
</body>
</html>
