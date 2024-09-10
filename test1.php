<?php

function sequence ($array) {
    $numbers = array_flip($array);
    $maxLength = 0;
    $sequence = [];

    foreach ($array as $number) {
        if(!isset($numSet[$number - 1])) {
            $current = $number;
            $currentSequence = [$current];

            while (isset($numbers[$current + 1])) {
                $current++;
                $currentSequence[] = $current;
            }
            $currentSequenceLength = count($currentSequence);
            if ($currentSequenceLength > $maxLength) {
                $maxLength = $currentSequenceLength;
                $sequence = $currentSequence;
            }
        }    
    }

    return print_r($sequence);
}

$input = array(250, 102, 251, 100, 101, 103);
sequence($input);