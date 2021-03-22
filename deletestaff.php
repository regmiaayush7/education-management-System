<?php include 'updateteacher.php'?>
<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'register');
$sql = "DELETE FROM staff WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>