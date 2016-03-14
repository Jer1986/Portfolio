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
    $number= 250;
    $upper= 1000;
    $lower= 500;
    
    if(!($number>=$lower) && !($number<=$upper)){
        echo "Okay! Your number is between ".$lower." and ".$upper;
    }else{
        echo "Sorry! The number must be between ".$lower." and ".$upper.".<br>";
    }
    ?>
    <h4>Is 1 the same as "1" in PHP?</h4>
   
    <?php
    $test=1;
    $test2 = "1";
    
    if($test === $test2){
        echo "Yes".$test." is the same as ".$test2."<br>";
    }else {
        echo "No, ".$test." is not the same as "." '1' "."<br>";
    }
    ?>
            <br><strong><u>Loops!</u></strong><br>
    
    <?php
    $counter = 0;    
        while($counter<10){
            echo $counter++."<br>";
            echo "<br>";
        }
        ?>
        <strong><u>A Do While Loop</u></strong><br><br>
        <?php
        $flavor = 10;
            do {
                echo $flavor++;
                echo " <-- How strange does this look ?"."<br>";
            }   while($flavor<21)
            
    ?>
   <br><strong><u>And A For Loop</u></strong><br><br>
    <?php
        for($shoeSize = 8; $shoeSize>=1; $shoeSize--){
            echo "We only have the following shoe sizes ";
            echo $shoeSize."<br>";
        }
          
    ?>
    
    