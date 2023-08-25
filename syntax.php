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
    // dealing with loops
       $counter = 0;

    //    while ($counter < 10) {
    //     echo $counter.'<br>';
    //     $counter++;
    //    }

       do {
        echo $counter.'<br>';
        $counter++;
       }
       while ($counter < 10);

       $games = ['cod', 'pop', 'ac'];
       //for each element of name game belonging to the array of name games print it
       foreach ($games as $game) {
        echo $game.'<br>';
       }

    //    using an associtive array
       $person = [
        'name' => 'Nchang',
        'surname' => 'Denzel',
        'age' => 19,
        'hobbies' => ['Video games', 'basketball']
    ];

    foreach ($person as $key => $value) {
        //if a value is an array then execute
        if (is_array($value)) {
            echo $key.' =>'.implode(", ", $value).'<br>';
        }
        else{
            echo $key.' =>'.$value.'<br>';
        }
    }
    echo '<br>';
?>

<?php
        // dealing with functions
        function hello(){
            echo "Bankai".'<br>';
        }
        hello();
        hello();
        hello();

        function sum($a,$b){
            return $a +$b;
        }

        echo sum(3,4).'<br>';

        function sumall(...$nums){
            //three dots selects all arguments or parameters in the function
            $sum = 0;
            foreach ($nums as $num) {
                $sum = $sum + $num;
        }
        return $sum;
    }
        echo sumall(1,2,3,4,5,7);

        echo '<br>';
        //dealing with arrow functions

?>

<?php
    // working with dates
        // printing the current date
        echo date('Y-m-d H:i:s').'<br>';

        
?>
</body> 
</html>