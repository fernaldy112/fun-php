<?php

function mostFrequentChar($str) {
    if (strlen($str) == 0) {
        return false;
    }

    $freq_arr = array_fill(97, 26, 0);
    for ($i=0; $i<strlen($str); $i++) {
        $freq_arr[ord($str[$i])] += 1;
    }
    $max_idx = array_search(max($freq_arr), $freq_arr);
    return chr($max_idx) . " " . $freq_arr[$max_idx] . "x";
}

// note: 
// - the function only accepts word with consists of lower case alphabets
// - the function returns the most frequent character
// - if there are multiple characters with same number of occurences, the function prioritizes character by alphabetical order
// - there is a mistake in the example given; r occurs 3 times in strawberry