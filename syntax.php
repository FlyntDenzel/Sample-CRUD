<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax</title>
</head>
<body>
    <!-- using variables in php -->

    <?php
        $name = 'denzel';
        $age = 19;
        $isMale = true;
        $height = 1.83;
        $salary = null;

        echo $name.'<br>';
        echo $height.'<br>';  
        echo $isMale.'<br>';
        echo $age.'<br>';
        //no output seen
        echo $salary;

        echo '<br>';
        //getting the variable's data type
        echo gettype($name).'<br>';
        echo gettype($height).'<br>';
        echo gettype($isMale).'<br>';
        echo gettype($age).'<br>';
        echo gettype($salary).'<br>';

        //using var_dump shows the data type, its length and the value of the variable
        var_dump($name);
        echo '<br>';
        var_dump($salary);
     ?>
</body> 
</html>