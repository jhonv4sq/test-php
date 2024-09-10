<?php

function fizzBuzz ($number) {
    $request = [];

    for ($i=1; $i < $number; $i++) { 

        if ($i % 4 == 0 && $i % 6 == 0) {
            $request[] = "FizzBuzz";
        }elseif ($i % 4 == 0) {
            $request[] = "Fizz";
        }elseif ($i % 6 == 0) {
            $request[] = "Buzz";
        }else{
            $request[] = $i;
        }
    }

    return print_r($request);
}

$number = 24;
fizzBuzz($number);