<?php
function twoSum($nums, $target)
{
    echo $nums[0];
    $numToIndex = [];

    for ($i = 0; $i < count($nums); $i++) {
        $complement = $target - $nums[$i];


        if (array_key_exists($complement, $numToIndex)) {

            return [$numToIndex[$complement], $i];
        }


        $numToIndex[$nums[$i]] = $i;
    }


    return [];
}


$nums = [2, 7, 11, 15];
$target = 26;
$result = twoSum($nums, $target);
print_r($result);
