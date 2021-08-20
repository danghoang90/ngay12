<?php
$arr =  [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];

function insertionSort($list)
{
    for ($i = 0; $i < count($list); $i++) {
        $val = $list[$i];
        $j = $i - 1;
        while ($j >= 0 && $list[$j] < $val) {
            $list[$j + 1] = $list[$j];
            $j--;
        }
        $list[$j + 1] = $val;
    }
    return $list;
}
echo implode(',', insertionSort($arr));
