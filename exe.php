<?php

echo 'hello world';
echo "\n";

function generateRandomNumbers(int $count): array
{
    $numbers=[];
    for($i=0;$i<$count;$i++){
       $numbers[]=rand(1,100);
    }

    return $numbers;
}

$numbers=generateRandomNumbers(20);

$list=implode(', ',$numbers);
echo $list;
echo '<pre>' . print_r(explode(', ',$list),true). '</pre>';
var_dump($list);
