// 1-Check The Number Is Even or Odd.
<?php
// 1-
   $num1 = 10;
   $result = $num1%2;

   if($result == 0){

    echo "even";
   }else{

    echo "odd";
   }

   ?>
   <?php
   // 3-
   echo strrev("youssefnassar");
   ?>

   <?php
   // 4-
    $radius = 4;
    $circle_area = pi() * $radius * $radius;
    $circumference = 2 * pi() * $radius;
 
    echo "the circle area is : $circle_area";
    echo '<br>';
    echo "the circumference is : $circumference";
 
    
    ?>
    <?php
    //11-
    $t = 0;
   if($t > 0 ){
    echo "the number is positive ";
   }elseif($t<0){
    echo "the number is  negative";
   }else{
      echo "the number is 0";
   }
   ?>


   <?php
   //12-  
   $w =[1,2,3,4,5,6,7,8,9,10];
   echo "<pre>";
   print_r($w);
   echo "</pre>";

   echo '<br>';
   ?>

   
 <?php
//13-
   $q= 5;
   $c= 7;
   $the_sum= $q+$c;

   echo "the sum of $q and $c is : $the_sum";
   ?>


