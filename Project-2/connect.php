<?php
    //connecting to database
    $con = new mysqli('localhost', 'admin', '', 'crudoperation');
    if (!$con) {
        die(mysqli_error($con));
    }

?>