<?php
if (!isset($_GET['id'])) {
    header("Location:show.php");

}

$con = mysqli_connect("localhost", "root", "", "demodb");

$id = $_GET['id'];

$query = "DELETE FROM employee_detail WHERE id=$id";

$result = mysqli_query($con, $query);

if ($result) {
    echo "<script>alert('Data Deleted successfully');";
    echo "window.location.href='show.php';</script>";
}

echo "data not deleted" . mysqli_error($con);
?>