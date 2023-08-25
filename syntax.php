<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax</title>
</head>
<body>
    
    <?php
        // dealing with variables in php

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
        // var_dump($salary);

        //built in functions for variables
        echo is_int($age); //outputs false
        echo is_double($salary).'<br>'; //outputs false

        //dealing with constants
        define('PI', 3.14);
        echo ("value of PI: ").PI.'<br>';
?>

<?php
    // using numbers for arithmetic operations
        $a = 5;
        $b = 2;
        $c = 1.5;

        echo $a + $b * $c.'<br>'.'<br>';

        //assigning variables
        echo ("assigning values to variables:").'<br>';

        $a += $b; 
        echo $a.'<br>';

        $a += $c; 
        echo $a.'<br>';

        $b += $c; 
        echo $b.'<br>';

        //dealing with number functions
        echo abs(-10).'<br>'; //prints the absolute value of the number in the brackets
        echo pow(2,3).'<br>'; //prints the value of the first digit to the power of the second digit
        echo round(1.3).'<br>';
?>

<?php
        // dealing with strings
        $question = 'how are you?';

        $string1 = 'Hello Nchang '.$question.'<br>';
        $string2 = "Hello Denzel".$question.'<br>';

        echo $string1.'<br>';

        // dealing with string functions
        $string = "     Hello      World     ";

        echo strlen($string).'<br>';//used to get the total length of the string
        echo trim($string).'<br>';//removes whitespaces before and after strings
        echo strrev($string).'<br>';

        // dealing with line and text breaks
        $longText = "
            Hello, my name is Nchang
            I am 19,
            I love Video Games
        ";

        echo $longText. '<br>';
        echo nl2br($longText). '<br>';
?>

<?php
        // working with arrays
        
        $fruits = ['mango', 'banana', 'pawpaw'];
        
        //printing the whole array
        echo '<pre>';
            var_dump($fruits);
        echo '</pre>';
        
        //accessing index value of an array
        echo '<br>';
        echo $fruits[1].'<br>';
    
        //checking whether there is an element at position number 0
        var_dump(isset($fruits[0]));

        //appending element into the array
        $fruits[] = 'Peach';

        echo '<pre>';
            var_dump($fruits);
        echo '</pre>';

        echo '<br>';
        //using associative array
        $person = [
            'name' => 'Nchang',
            'surname' => 'Denzel',
            'age' => 19,
            'hobbies' => ['Video games', 'basketball']
        ];

      echo '<pre>';
            var_dump($person);
      echo '</pre>';

      //searching the value of specified key
      echo $person['name'].'<br>';

?>
<?php
    echo 'hello from this side of the room';
?>
</body> 
</html>