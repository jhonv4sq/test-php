<?php

function repeatedFrequency ($numbers, $k) {
    $frequencies = array_count_values($numbers);
    arsort($frequencies);
    $request = array_keys(array_slice($frequencies, 0, $k, true));
    return print_r($request);
}

$array = array(4,4,4,5,5,6);

repeatedFrequency($array, 1);
repeatedFrequency($array, 2);