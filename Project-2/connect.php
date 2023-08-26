<?php
    //connecting to database
    $connection = new mysqli('localhost', 'admin', '', 'crudoperation');
    if ($connection) {
        echo "connected successfuly";
    }
    else{
        die(mysqli_error($connection));
    }

?>