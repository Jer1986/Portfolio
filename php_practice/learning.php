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

    <input type="text" name="name" value= '<?php echo $message;?>'>
    
<hr>
    