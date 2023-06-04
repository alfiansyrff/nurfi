<?php
require_once('../connection/db.php');

// Retrieve the ID from the request parameters
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Validate the ID or handle any potential errors

// Build the query to fetch data for the specified ID
$query = "SELECT * FROM beasiswa WHERE id = " . $id;

// Execute the query
$result = mysqli_query($conn, $query);

// Check if a row is found
if (mysqli_num_rows($result) > 0) {
    // Fetch the data from the result
    $data = mysqli_fetch_assoc($result);

    // Return the data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    // Handle the case when no row is found
    // You can return an appropriate response or error message
    echo "No data found for the specified ID.";
}

?>
