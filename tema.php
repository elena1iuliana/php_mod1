<?php
   $vec=[20];
   $cnt1=0;$cnt2=0;
   $max1=0;$min1=101;
   for($i=0;$i<20;$i++)
   {
    $vec[]=rand(1,100);
   }
   //ex1.1
   foreach($vec as $n){
     echo $n . " ";
   }
   echo "\n";

   //ex1.2
   for($i=0;$i<20;$i++)
   {
      if($vec[$i]%2==0)
        $cnt1++;
    else
        $cnt2++;
   } 
   echo $cnt1 . " " . $cnt2;
   echo "\n";

   //ex1.3,1.4,1.5
   for($i=0;$i<20;$i++)
  {
    if($vec[$i]%3==0 && $vec[$i]%4==0)
    {
        echo $vec[$i] . " multipli de 12 ";
    }
    elseif($vec[$i]%4==0)
        echo $vec[$i] . " multiplu de 4 ";
    else
         echo $vec[$i] . " multiplu de 3 ";
  }
     echo "\n";

  //ex1.5
  for($i=0;$i<20;$i++)
  {
    if($vec[$i]>$max1)
        $max1=$vec[$i];

    if($vec[$i]<$min1)
        $min1=$vec[$i];
  }
     echo $min1 . " " . $max1;
    echo "\n";

//ex2----------------------
$str="cuvantrandom";
for($i=strlen($str)-1;$i>=0;$i--)
    echo $str[$i];
echo "\n";
//ex2.2
$vocale="aeiouAEIOU";$v=0;$c=0;
for($i=0;$i<=strlen($str)-1;$i++)
{
       if (strchr($vocale, $str[$i]) !== false) 
        $v++;
    else
        $c++;
}
 echo $v. " ".$c;
echo "\n";
//ex3-------------------
$aux=0;
 for($i=0;$i<=20-1;$i++)
    for($j=$i+1;$j<=20;$j++)
        if($vec[$i]>$vec[$j])
          { $aux=$vec[$i];
            $vec[$i]=$vec[$j];
            $vec[$j]=$aux;
          }

 foreach($vec as $n){
     echo $n . " ";
   }
echo "\n";

$aux=0;
for($i=0;$i<=20-1;$i++)
    for($j=$i+1;$j<=20;$j++)
        if($vec[$i]<$vec[$j])
          { $aux=$vec[$i];
            $vec[$i]=$vec[$j];
            $vec[$j]=$aux;
          }

 foreach($vec as $n){
     echo $n . " ";
   }

echo "\n";

 $fr = array_fill(0, 100, 0);
 for($i=0;$i<=20;$i++)
 {
    $fr[$vec[$i]]++;
 }
 for($j=0;$j<100;$j++)
 {
    if($fr[$j]>0)
        echo $j . " ";
 }

 echo "\n";

 //ex4--------------------
 function factorial($n) {
    if ($n < 0) {
        return null;
    }

    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

echo factorial(5); 

echo "\n";

function fib($n) {
    if ($n <= 1) {
        return $n;
    }
    return fib($n - 1) + fib($n - 2);
}

echo fib(15);
//ex5------------------------------------------------
$students = [
    "Alice" => 85,
    "Bob" => 72,
    "Charlie" => 90
];
//ex1
$average = array_sum($students) / count($students);
echo "Average Grade: " . $average;
echo "\n";
//ex2
$notamax=max($students);
$studentulm=array_search($notamax,$students);
echo $notamax." ". $studentulm ; 
echo "\n";

$notamin=min($students);
$studentmi=array_search($notamin,$students);
echo $notamin." ". $studentmi ; 
echo "\n";

echo "Students who passed:<br>";
foreach ($students as $student => $grade) {
    if ($grade >= 60) {
        echo "$student ($grade)";
        echo "\n";

    }
}


?>



