<?php
session_start();
require_once('../connection/db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform the deletion query
    $query_delete = "DELETE FROM beasiswa WHERE id = '$id'";
    mysqli_query($conn, $query_delete);

    // Redirect back to the page that displays the data
    header("Location: beasiswa.php");
    exit;
}
?>
