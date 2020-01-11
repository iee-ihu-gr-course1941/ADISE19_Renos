<?php
    require_once 'db_connect.php';
    session_unset();
    session_destroy();  
    $sql = "UPDATE `boardTable` SET `c0`='',`c1`='',`c2`='',`c3`='',`c4`='',`c5`='',`c6`='',`c7`='',`c8`='',`t`=0";
    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    header('location: index.php');

?>