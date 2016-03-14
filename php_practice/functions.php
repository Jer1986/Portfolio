<?php
     // This is how to connect to a local host
   // mysqli_connect('localhost','root',' ') OR die("Could not connect to the database.");
     //   echo "Connected to the database!";

$number = "Starting the day off with some PHP!";

switch ($number){
    case "Starting the day off with some PHP!":
            echo "We're starting the day off with PHP,Sweet!<br>";
    break;
    
    case "We're not starting the day off with PHP":
            echo "No PHP today :-(";
    break;
    
    default:
            echo "Statement not found, bummer.";
    break;
}
    //You could continue with more case switch statments that could get messy.

    $day = "Monday";
    switch ($day){
        case "Saturday":
        case "Sunday":
            echo "It's the weekend!";
    break;
        
        default:
            echo "Sorry dude! Back to the salt mines for you. It's a ".$day;
        break;
    
        
    }
    echo"<br><br><strong><u>Functions In PHP</strong></u><br><br>";
    //die and exit will do similar things.
   
    function myName(){
        echo "Jose";
    }
        echo "My name is ";
        myName();
        echo "<br><br>";
    
    $food1 =12;
    $food2 = 37;
    
    function add($burritos, $tacos){
        echo $burritos+$tacos;
    }
    echo "Combined there are ";
    add($food1,$food2);
    echo " burritos and tacos.";

?>