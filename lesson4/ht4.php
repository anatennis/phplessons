<?php

function ArrRev($arr) {
    $arr1=[];
    $lenght = count($arr);
    for ($i=0; $i<$lenght;  $i++) {
        $arr1[$i] = $arr [$lenght-$i-1];
    }
    return $arr1;
}

function findMax($arr) {
    if (count($arr)==0) {
        return 'Array is empty';
    } else { $max = $arr[0]; }
    for ($i=0; $i<count($arr); $i++) {
        if ($arr[$i]>$max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

function findMin($arr) {
    if (count($arr)==0) {
        return 'Array is empty';
    } else { $min = $arr[0]; }
    for ($i=0; $i<count($arr); $i++) {
        if ($arr[$i]<$min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

$arr = [23, 89, 44, 67, -32, 0, 67, 1, 82];
var_dump($arr);
var_dump(ArrRev($arr));
var_dump(findMax($arr));
var_dump(findMin($arr));
$arr = [];
var_dump(findMin($arr));

?>