<?php

// Declaring numbers

    $a = 5; //type is integer
    $b = 4;
    $c = 1.2; //type is float

// Arithmetic operations

    echo ($a + $b) *$c .'<br>'; //brackets done first
    echo $a - $b .'<br>'; //subtraction
    echo $a * $b .'<br>'; //multiplacation
    echo $a / $b .'<br>'; //division
    echo $a % $b .'<br>'; //remainder when $a divided by $b

// Assignment with math operators

    // $a += $b; echo $a .'<br>'; //assigns answer of $a + $b to $a
    // $a -= $b; echo $a .'<br>'; //Can do the same for all other math operations
    // $a *= $b; echo $a .'<br>';
    // $a /= $b; echo $a .'<br>';
    // $a %= $b; echo $a .'<br>';

// Increment operator

    echo $a++ .'<br>'; //Increases value by one after printing
    echo ++$a .'<br>'; //Adds one and then prints the number
// Decrement operator

    echo $a-- .'<br>';
    echo --$a .'<br>';

// Number checking functions

    is_float(1.25); //True
    is_double(1.25); //True
    is_int(5); //True
    is_numeric("3.45"); //True
    is_numeric("3g.45"); //False as not full integer anymore, is string

// Conversion

    $strNumber = "12.34";
    $number = (float)$strNumber; //Take the strNumber and turn it into a float type
    //$number = intval($strNumber); //also converts it
    var_dump($number);
    echo '<br>';
// Number functions

    //In "" writes out function as text so we cna see visually, then the actual function is performed.
    echo "abs(-15) " .abs(-15) .'<br>'; //absolute value of function
    echo "pow(2, 3) " .pow(2, 3) .'<br>'; //Takes two arguements, raises number to exponential power
    echo "sqrt(16) " .sqrt(16) .'<br>'; //Gives square root
    echo "max(2, 3) " .max(2, 3) .'<br>'; //Gives max value out of multiple numbers
    echo "min(2, 3) " .min(2, 3) .'<br>'; //Gives minimum value out of multiple numbers
    echo "round(2.4) " .round(2.4) .'<br>'; //Round value normally, in this case down
    echo "round(2.6) " .round(2.6) .'<br>'; //Round value normally, in this case up
    echo "floor(2.6) " .floor(2.6) .'<br>'; //Floor means round down to nearest whole
    echo "ceil(2.4) " .ceil(2.4) .'<br>'; //Ceil means round up to nearest whole number

// Formatting numbers

$number2 = 123456789.12345;

echo number_format($number2, 2, '.', ',');

// https://www.php.net/manual/en/ref.math.php

