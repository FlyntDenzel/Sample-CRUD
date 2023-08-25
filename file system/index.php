<?php
//    working  with magical constants 

    //prints the current directory of the file
    echo __DIR__.'<br>';
    //prints the directory of the file being used 
    echo __FILE__.'<br>';
    //prints the line in which "LINE" is being written i.e 7
    echo __LINE__.'<br>';

    // creating directory
    //  mkdir('test');

    //reading a file and its content
    echo file_get_contents('text.txt').'<br>';
?>