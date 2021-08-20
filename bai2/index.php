<?php
$arr = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];

function bubbleSort($list)
{
    for ($i=0 ; $i < count($list) - 1; $i++) {
        for ($j = 0 ; $j < count($list)-1 - $i; $j++) {
            if ($list[$j] > $list[$j+1]) {
                $temp = $list[$j+1];
                $list[$j+1] = $list[$j];
                $list[$j] = $temp;
            }
        }
    }
    return $list;
}

echo implode(',', bubbleSort($arr));