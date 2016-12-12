<?php
namespace Fun;

class CompareTheScores
{
   public function __construct()
   {
     //   echo 'Yey! The constructor works...' . PHP_EOL;
   }
    
   public function Compare($Astudent, $Bstudent)
   {
    $studentA =  array();
    $studentB = array();
	$assigmentcount=count($Astudent);

   for($c=0;$c<$assigmentcount;$c++)
   {
    if($Astudent[$c]==$Bstudent[$c])
    {
     $studentA[$c]=0;
     $studentB[$c]=0;
     continue;
    }
    if($Astudent[$c]>$Bstudent[$c])
    {
     $studentA[$c]=1;
     $studentB[$c]=0;
     continue;
    }
    if($Astudent[$c]<$Bstudent[$c])
    {
     $studentA[$c]=0;
     $studentB[$c]=1;
     continue;
    }
   }
   for ($i=0;$i<$assigmentcount;$i++)
    {
     echo $studentA[$i]." ";
     
    }
     echo " = ".array_sum($studentA).PHP_EOL;
   for ($i=0;$i<$assigmentcount;$i++)
    {
     echo $studentB[$i]." ";

    }
    echo " = ".array_sum($studentB).PHP_EOL;
   }
}
