<?php

// Create simple string
    $name = "Daniel";
    $string = 'Hello I am $name. I am 24.';
    $string2 = "Hello I am $name. I am 24.";

    echo $string .'<br>';
    echo $string2 .'<br>';
// String concatenation

    echo 'Hello '.' World'.' and PHP'.'<br>';

// String functions

    $string = "     Hello World     ";
    //HTML already ignores white spaces when visualised but the actual variable is changed

    echo "1 - " . strlen($string) . '<br>'; //String length
    echo "2 - " . trim($string) . '<br>';   //Removes white spaces from beginning and end
    echo "3 - " . ltrim($string) . '<br>';  //Removes white spaces from left side
    echo "4 - " . rtrim($string) . '<br>';  //Removes white spaces from right side
    echo "5 - " . str_word_count($string) . '<br>'; //Word count
    echo "6 - " . strrev($string) . '<br>'; //Reverses word
    echo "7 - " . strtoupper($string) . '<br>'; //Converts to uppercase
    echo "8 - " . strtolower($string) . '<br>'; //Converts to lowercase
    echo "9 - " . ucfirst('hello') . '<br>'; //testing
    echo "10 - " . lcfirst('HELLO') . '<br>';
    echo "11 - " . ucwords('hello world') . '<br>';
    echo "12 - " . strpos($string, 'world') . '<br>';
    echo "13 - " . stripos($string, 'world') . '<br>';

// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php