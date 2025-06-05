<?php 

function singleNumber($nums)
{

    $countValues = array_count_values($nums);

    $twoTimesElements = array_keys(array_filter($countValues, function ($count) {
        return $count === 2;
    }));

    return $twoTimesElements;
}
 
$array = [1, 2, 3, 1, 4, 4, 6, 5, 5, 5, 5];
$result = singleNumber($array);

echo "2回格納されている数は\n<br/>";
foreach ($result as $number) {
    echo $number . "\n<br/>";
}
echo "です。";
?>