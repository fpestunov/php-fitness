<?php

function binarySum(string $a, string $b): string
{
    return decbin(bindec($a) + bindec($b));
}

var_dump(binarySum('10', '1')); // 11
var_dump(binarySum('1101', '101')); // 10010
