<?php

// What is a variable
    // Container that stores values, loosely typed, don't specify type.
// Variable types
   

    /* Types of variables:
        String
        Integer
        Float/double
        Boolean
        Null
        Array
        Object
        Resource
    */

// Declare variables
$name = "Daniel";
//dynamically typed to "string"
$age = 24;
//dynamically typed to "number"
$isMale = true;
$height = 1.85; //type is float/double
$salary = null;

// Print the variables. Explain what is concatenation

    echo $name . '<br>';;
    echo $age . '<br>';;
    echo $isMale . '<br>';; //prints boolean as 1 or empty string based on true or false
    echo $height . '<br>';;
    echo $salary . '<br>';; //null is converted into empty string

// Print types of the variables

    echo gettype($name) . '<br>';
    echo gettype($age) . '<br>';
    echo gettype($isMale) . '<br>';
    echo gettype($height) . '<br>';
    echo gettype($salary) . '<br>';

// Print the whole variable

    var_dump($name, $age, $isMale, $height, $salary); //Prints out information on variable, good for arrays and big objects

// Change the value of the variable

    $name = false;

// Print type of the variable

    echo gettype($name) . '<br>';

// Variable checking functions

is_string($name); //true or false, will come up as false as we changed it to not string
is_int($age);
is_bool($isMale);
is_double($height);

// Check if variable is defined

isset($name); //is variable declared or not. Will be true.
isset($address); //Will be false as not declared.

// Constants

    //something you assign that can't be changed like a variable
    define('PI', 3.14);

    echo PI.'<br>';

// Using PHP built-in constants

    echo SORT_ASC . '<br>'; //sort in ascending order
    echo PHP_INT_MAX . '<br>';