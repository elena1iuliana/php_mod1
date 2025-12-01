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

?>

