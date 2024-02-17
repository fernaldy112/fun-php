<?php

$tokens = array();

// a
function generate ($user) {
    global $tokens;

    // random string
    $random_int = rand();
    $random_string = md5($random_int);

    // initialize tokens array for user
    if (!isset($tokens[$user])) {
        $tokens[$user] = array();
    }

    // push generated token
    array_push($tokens[$user], $random_string);

    // check if there are 10 tokens generated for user
    if (count($tokens[$user]) > 10) {
        array_shift($tokens[$user]);
    }

    return $random_string;
}

// b
function verify_token($user, $token) {
    global $tokens;

    if (isset($tokens[$user]) && in_array($token, $tokens[$user])) {
        $idx = array_search($token, $tokens[$user]);
        array_splice($tokens[$user], $idx, 1);
        return true;
    }

    return false;
}
