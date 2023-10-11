<?php

function isValid($s)
{
    $stack = [];
    $bracketMap = [
        ')' => '(',
        '}' => '{',
        ']' => '[',
    ];

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];

        if (array_key_exists($char, $bracketMap)) {

            $topElement = (empty($stack)) ? '#' : array_pop($stack);
            if ($topElement !== $bracketMap[$char]) {
                return false;
            }
        } else {

            array_push($stack, $char);
        }
    }

    return empty($stack);
}


$input = "([]{}{})";
if (isValid($input)) {
    echo "Valid\n";
} else {
    echo "Invalid\n";
}
