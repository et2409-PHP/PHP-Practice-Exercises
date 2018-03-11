<!DOCTYPE html>
<html>
    <head>
        <title>Simple Loops</title>
    </head>

    <body>
    <?php
    
    $x = 0;    
    while($x < 9){
        print("abc ");
        $x++;
            
        } 
    echo("<br/>");
    
    $y = 0; 
    do{
        print("xyz ");
        $y++;
      }  
        while($y < 9);
     echo("<br/>");        

     for($t=1; $t<10; $t++){
         print("$t ");
         
     }   
     echo("<br/>");    
        
    //answer from web    
      echo "\n<ol>";
        for ($x='A'; $x<'G'; $x++){
          echo "<li>Item $x</li>\n";
          }
        echo "\n</ol>";          
     
    ?>
    
    
    </body>




</html>