<?php

//sorting an array with merge sort approach 
//time complexity is O(n log n).

function mergeSort($Array)
{
    $len = count($Array);
    if($len==1){
        return $Array;
    }
    $mid = (int)$len / 2;
    $left = mergeSort(array_slice($Array, 0, $mid));
    $right = mergeSort(array_slice($Array, $mid));
    return merge($left, $right);
}

function merge($left, $right)
{


    $combined = [];
    $totalLeft = count($left);
    $totalRight = count($right);
    $rightIndex = $leftIndex=0;
    while ($leftIndex < $totalLeft && $rightIndex < $totalRight) {
        if ($left[$leftIndex] > $right[$rightIndex]) {
            $combined[]=$right[$rightIndex];
            $rightIndex++;
        }else {
            $combined[] =$left[$leftIndex];
            $leftIndex++;
        }
    }
    while($leftIndex<$totalLeft){
        $combined[]=$left[$leftIndex];
        $leftIndex++;
    }
    while ($rightIndex<$totalRight){
        $combined[] =$right[$rightIndex];
        $rightIndex++;
    }
    return $combined;
} 
//3 6 8 7 0 1 4 2 9 5
$testArray = array(3,6,8,7,0,1,4,2,9,5);   

$sorterArray = mergeSort($testArray);
print_r($testArray);
print_r($sorterArray);

