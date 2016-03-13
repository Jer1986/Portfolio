<?php
    $num = 30;
    $num +=10;
   echo $num."<br>";
   // modulus (real fun!)
    $num2 = 32;
    $num2 %= 12;
    echo $num2."<br>";
    $x = 30;
    $x++;
    echo $x;
    echo "<br>";  
    
    if ($num > $num2){
        echo "This is true 40 is greater than 31";
    } else {
        echo "This is false";
    }
?>
<hr>
    <h4><u>Arithmatic Operators</u></h4>
<?php

$sum = 15;
$sum1= 30;
 echo $sum."<br>";
 echo $sum1."<br>";
 $result = $sum+$sum1."<br>";
 echo $result;
 ?>
 
    <h4><u>Logical Operators</u></h4>
    <?php
    $number= 650;
    $upper= 1000;
    $lower= 500;
    
    if($number>=$lower || $number<=$upper){
        echo "Okay!";
    }else{
        echo "That's false";
    }
    
    
    ?>