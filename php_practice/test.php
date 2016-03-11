
    <html>
        <head>
            <title>This is my test site!</title>
        </head>
        <body>
            
            <?php
                $dog = "Our dog, Einstein, he eats his own poops!";
                $jen = "My girlfriend, her name is Jennie";
                echo $jen."<br>";
                echo $dog. "<br>";
                ?>
                
        
       <?php
            $a = 16;$b = 2;
            if($a = $b) echo "These two are the same <br>";
            if($a > $b) echo "These two are the same<br>";
            if($a < $b )echo "These two are not the same<br>";
            if($a == $b )echo "These two are not the same<br>";
         ?>
         <p><?php
            $count=0;
            while(++$count <= 12){
            echo "$count times 12 is ".$count * 12 . "<br>";
            
            }
         ?></p>
         <div>
            <?php
                    
            ?>
            
         </div>
        </body>
    </html>
    
    