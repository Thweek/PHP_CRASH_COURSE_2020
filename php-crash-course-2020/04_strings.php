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
    echo "9 - " . ucfirst('hello') . '<br>'; //First letter to uppercase
    echo "10 - " . lcfirst('HELLO') . '<br>'; //First letter to lowercase
    echo "11 - " . ucwords('hello world') . '<br>'; //First letter of every world to uppercase
    echo "12 - " . strpos($string, 'world') . '<br>'; // Searches for first position of a word inside of string
    echo "13 - " . stripos($string, 'world') . '<br>'; // Searches without worrying about case
    echo "14 - " . substr($string, 8, 6) . '<br>'; //Returns part of string after number, goes other way if negative.
    //Third arguement is amount of string shown after position
    echo "15 - " . str_replace('World', 'PHP', $string) . '<br>'; //1st arguement is search for word.
    //2nd arguement is what to replace word with. 3rd arguement is what to search through.
    echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>'; //Same but case insensitive.

// Multiline text and line breaks

$longText = "
    Hello, my name is Daniel
    I am 24,
    I love my dog
";

echo $longText . '<br>';
echo nl2br($longText) . '<br>'; //Creates <br> tags when finds new line

// Multiline text and reserve html tags

$longText2 = "
    Hello, my name is <b>Daniel</b>
    I am 24,
    I love my dog
";

echo nl2br($longText2); //Can also show with added HTML tags
echo nl2br(htmlentities($longText2)); //Shows written HTML tags with line breaks

// https://www.php.net/manual/en/ref.strings.php