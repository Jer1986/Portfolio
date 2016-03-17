<html>
    <head>
        <title>Diving deeper into PHP</title>
    </head>
</html>
<?php
     $scuba = array("Recreational"=>array("Open Water diver","air","above 130ft"),
                   
"Technical"=>array("mixed gas","below 130ft.","more planning than recreational diving"));
        
        
        echo "One aspect of technical diving is diving ";    
        echo $scuba ["Technical"][1]."<br>";
        echo " A part of recreational diving is diving ";
        echo $scuba["Recreational"][2]."<br><br>";
        
        $workout = array('Gym'=> array("Squats","Deadlifts","Seated Rows"),
                         'Bodyweight'=>
                         
                                array("push-ups","Running","Pull-ups"));
        
        foreach($workout as $type => $exercise){
            echo "<strong><br>".$type."</strong><br>";
        
        foreach($exercise as $kind){
            echo $kind."<br>";
        }
    }

?>
    <h3>Up Next On Our Deep Dive...</h3>
    <?php
            echo "<br>";
            echo "<Strong>We're using <u>preg_match</u></Strong><br><br>";
                
        function has_space($string) {
            if (preg_match("/ /", $string)) {
            return true;
        } else {
            return false;
        }
    }
    
        $string = "This is a string";
         global $string;
         
     if (has_space($string)){
        echo "There is space in this sentence<br>";
     } else {
        
        echo "There is no space here in this sentence.";
     }
     
        $hello= "<u>Hi there! We're diving deeper into PHP.</u>";
          
          $theLength = strlen($hello);
          echo "The length of ".$hello." is ".$theLength." characters.<br>";
          
          
        $gum = "<br>This is SOME CRazy TypINg";
        $gum2 = strtolower($gum);
        echo $gum2."<br>";
        $gum3 = strtoupper($gum);
        echo "$gum3";
    
    ?>
        