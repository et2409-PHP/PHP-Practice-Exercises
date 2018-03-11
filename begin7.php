<!DOCTYPE html>
<html>
    <head>
        <title>Variable Data Types</title>
    </head>

    <body>
        <?php
        
        //gettype — Get the type of a variable
        //string gettype ( mixed $var )
        //Returns the type of the PHP variable var. For type checking, use is_* functions.
        //Possible values for the returned string are:
        /*"boolean"
        "integer"
        "double" (for historical reasons "double" is returned in case of a float, and not simply "float")
        "string"
        "array"
        "object"
        "resource"
        "resource (closed)" as of PHP 7.2.0
        "NULL"
        "unknown type"  */
        
       $whatsit="Eyvette";
        print_r("Value is " .  gettype($whatsit) .  '.');
        echo("<br/>");
        
        $whatsit= 23.56;
        echo ("Value is " .  gettype($whatsit) .  '.');
        echo("<br/>");
        
        $whatsit= true;
        echo ("Value is " .  gettype($whatsit) .  '.');
        echo("<br/>");
        
        $whatsit= 123;
        echo ("Value is " .  gettype($whatsit) .  '.');
        echo("<br/>");
        
        $whatsit= NULL;
        echo ("Value is " .  gettype($whatsit) .  '.');
        echo("<br/>");
        
        
        
        
        ?>
    
    
    </body>




</html>