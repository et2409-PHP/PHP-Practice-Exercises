<!DOCTYPE html>
<html>
    <head>
        <title>Nested For Loops</title>
    </head>

    <body>
    <?php   
    print('<table style="width:200px; height:200px; background-color:yellow; border:2px solid black; border-collapse: collapse;">');   
    for($row=1; $row< 8; $row++){  
        print("<tr>");
        for($col=1; $col< 8; $col++){
            
         $total = $col * $row;
            //if($total % 2 == 0){
                //print("<td style='background-color: blue;'></td>");
                print("<td style='border:2px solid black;'>$total</td>");
            //}
            //else{
                //print("<td style='background-color: red;'></td>");
                //print("<td>$col</td>");
            //}
            
            }
                print("</tr>");
        }
    
  
   
  print("</table>");
   ?>     
             
    </body>

</html>