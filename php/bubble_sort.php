<?php
declare(strict_types=1);

$A = [2, 4, 3, 5, 6, 1];

$result = bubbleSort($A);
assert(implode('', $result) === '123456');

function bubbleSort($arr): array
{
    $flg = true;
    $arr_length = count($arr) - 1;
    while ($flg) {
        $flg = false;
        for ($i = 0; $i < $arr_length; ++$i) {
            $current = $arr[$i];
            $next = $arr[$i + 1];
            if ($next < $current) {
                $arr[$i] = $next;
                $arr[$i + 1] = $current;
                $flg = true;
            }
        }
    }
    return $arr;
}
