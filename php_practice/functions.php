
<body style="background-color: lightblue;" >

</body>

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
            $jumbled = strrev($lengthOf);
            echo "The number of words in our string is ".$wordCount;
            echo "<br>The length of our string is ".$stringL."<br>";
            echo "Sometimes we get our words mixed up like this: ".$jumbled;
            echo "<br>";
                      echo "<h4><u>Checking For Plagiarism</u></h4>";

        $essay1= "This is my essay and I wrote it wiht my own research.";
        $essay2 ="This is my essay and I wrote it wiht my own research no one helped me.";
          similar_text($essay1,$essay2,$result);
          echo "<br> Essay 1: ".$essay1."<br>";
          echo "<br> Essay 2: ".$essay2."<br>";            
          echo "<br>The chance these two essay's are the same is about a ".$result." percent.";
          echo "<br>";
?>
<?php
echo <<<_END
    <title>This is my PHP page</title>
    <h3><u>Arrays</u><h3><br>
     
    <h5>But first! A string function.</h5>
_END;
?>
<?php
    $aString = "This is a string";
    $trimmed = ltrim($aString,"string");
    echo $trimmed."<br>";
    
    $food = array("Noodles","Meat", "Sauce");
        echo $food[1];
        echo "<br>";
        $food[3]="Veggies";
        print_r($food);
    



?>














