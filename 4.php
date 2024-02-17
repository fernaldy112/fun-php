<?php

$nums = array();
for ($i=0; $i<5; $i++) {
    $nums[$i] = rand();
}

function secondLargest($nums) {
    $idxMax = array_search(max($nums), $nums);
    array_splice($nums, $idxMax, 1);
    return max($nums);
}
