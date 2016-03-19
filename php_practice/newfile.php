<?php
//This is a way to replace a string
$newStr= "It's the Saturday and it looks like it may rain";
$toReplace = str_replace("Saturday","weekend",$newStr);
    echo $toReplace;
    echo "<br>";
    
    $oldString = array("replace","a","set of words");
    $newString = array("use"," these ", "words instead");
    $useThis= "We are going to ";
    
    $newOne = str_replace($oldString,$newString,$useThis);
    echo $newOne;

?>