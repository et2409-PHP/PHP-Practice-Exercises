<!DOCTYPE html>
<html>
    <head>
        <title>If-Else Statement</title>
    </head>

    <body>
    <?php
    
    $month = (date("F"));     
        print($month);
        print("<br/>");
        if ($month == "August"){
            print("It's August, so it's really hot.");
            }
            else{
                print('Not August, so at least not in the peak of the heat.');
            }
                
     
    ?>
    
    
    </body>




</html>