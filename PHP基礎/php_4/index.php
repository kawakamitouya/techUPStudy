<?php
$array = [1, 2, 3, 1, 3, 3, 3, 4, 4, 4, 5];
$num=array_count_values($array);

foreach($num as $value=>$count){
    echo $value.'が'.$count.'つ<br/>';
}
?>