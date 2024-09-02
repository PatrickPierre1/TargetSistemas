<?php
function inverterString($str) {
    $inverted = '';
    $length = strlen($str);

    for ($i = $length - 1; $i >= 0; $i--) {
        $inverted .= $str[$i];
    }

    return $inverted;
}

$string = "Target Sistemas";
echo inverterString($string);