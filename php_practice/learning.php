<?php
   
    echo "This is a simple PHP statement<br>";   
    
    $moo = "French Bulldog";
    if($moo == "French Bulldog"){
        echo "The ".$moo." "."is an expensive dog<br>";
    }else{
        echo "Moo, he's just a regular dogs";
        
    }
    ?>

    <?php  echo "<strong>Hello, World!</strong><br>";
           echo '<br>';
            
    ?>
    
    
        <!-- "\" these escape characters can be used to out put code into text.-->
        <?php echo '<div> This is how you put a div tag in your PHP. </div><br>'; ?>
        
        
<!-- Embedding PHP inside HTML-->
<?php
    $message ="Hello Visitor!"

?>

    <input type="text" name="name" value= '<?php echo $message; ?>'>
    <br>
    <input type="submit" name="submit button" value="Say hello!">
    
<hr>
    <!-- If & else if-->
    <?php
        $tacos = "delicious";
        if($tacos == "delicious"){
            echo "Are tacos good? Yes! tacos are ".$tacos."!";
        } else if ($tacos == "gross") {
            echo "Are tacos good? No, they are gross!";
        }else{
            echo "Are tacos good ? I'm indifferent.";
            }
        
    
    ?>
    