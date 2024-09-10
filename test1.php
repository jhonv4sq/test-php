<?php

function sequence ($array) {
    $numbers = array_flip($array);
    $maxLength = 0;
    $sequence = [];

    foreach ($array as $number) {
        if(!isset($numSet[$number - 1])) {
            $current = $number;
            $CurrentSequence = [$current];

            while (isset($numbers[$current + 1])) {
                $current++;
                $CurrentSequence[] = $current;
            }
            $currentSequencelength = count($CurrentSequence);
            if ($currentSequencelength > $maxLength) {
                $maxLength = $currentSequencelength;
                $sequence = $CurrentSequence;
            }
        }    
    }

    return print_r($sequence);
}

$input = array(250, 102, 251, 100, 101, 103);
sequence($input);