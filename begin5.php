<!DOCTYPE html>
<html>
    <head>
        <title>Variable Content and Destruction</title>
    </head>

    <body>
        <?php
        
        /* var_dump — Dumps information about a variable
         print_r() - Prints human-readable information about a variable
         debug_zval_dump() - Dumps a string representation of an internal zend value to output
         var_export() - Outputs or returns a parsable string representation of a variable
         __debugInfo()- This method is called by var_dump() when dumping an object to get the properties  that should be shown. If the method isn't defined on an object, then all public, protected and  private properties will be shown. */
        
        
        $name = "Harry";
        $x = 28;
        
        var_dump($name); 
        echo("<br/>");
        
        print($name);
        echo("<br/>");
        
        var_dump($x);
        echo("<br/>");
        
        $y = "NULL";
        print($y);
        echo("<br/>");
        
        ?>
    
    
    </body>




</html>