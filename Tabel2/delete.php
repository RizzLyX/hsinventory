<?php
// include database connection file
include_once("..\connect.php");

// Get id from URL to delete that user
$id = $_GET['ID'];

// Delete user row from table based on given id
$result2 = mysqli_query($mysqli, "DELETE FROM detail WHERE ID=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location: ..\index.php");
?>