<?php
$con = mysqli_connect("localhost", "root", "","adise_project");
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>