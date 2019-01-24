<?php
declare(strict_types=1);

$A = [2, 4, 3, 5, 6, 1];

for ($index = 1; $index <= count($A) - 1; $index++) {
    $v = $A[$index];
    $prev_index = $index - 1;
    while ($prev_index >= 0 && $A[$prev_index] > $v) {
        $A[$prev_index + 1] = $A[$prev_index];
        $prev_index--;
        $A[$prev_index + 1] = $v;
    }
}

$result = implode('', $A);

assert($result === '123456');