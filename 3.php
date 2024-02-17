<?php

$idx = -1;
$colors = ["merah", "kuning", "hijau"];

function rambuLaluLintas(){
    global $idx, $colors;
    $idx++;
    $idx %= 3;
    return $colors[$idx];
}
