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
    
    echo "<br><br><strong><u>Functions With Strings & Integers</strong></u><br><br>";
    
    function theDate($day,$date,$year){
        echo $day.''.$date." ".$year;
    }
        theDate("Monday ", 14 ,2016);
        echo "<br>";
        
        function together($thing1, $thing2){
            $things = $thing1+$thing2;
            return $things;
        }
        echo "<br>";
        echo together(25,25)+150;
        echo "<br>";
        
        $userName = "Jennie";
        
        function name(){
            global $userName;
            $personName = "Your user name is ".$userName;
            echo $personName;
        }
          name();
          echo "<br>";
          echo "<h4><u>String Functions</u></h4><br>";
                  
            $lengthOf = "We are finding the length of a string.";
            $wordCount= str_word_count($lengthOf);
            $stringL = strlen($lengthOf);
            echo "The number of words in our string is ".$wordCount;
            echo "<br>The length of our string is ".$stringL;
          
?>