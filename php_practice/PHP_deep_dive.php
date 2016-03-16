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