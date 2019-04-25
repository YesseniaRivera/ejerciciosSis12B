<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <section>
            <form action="#" method="">
                Cuantos empleados<input type="text" name="n"><br>
                <input type="submit" name="b1">
            </form>
        <?php
        if(isset($_POST["b1"])){
            $n=$_POST["n"];
            $venta=$_POST["venta"];
	    for ($i=1; $i <$n ; $i++) { 
	        echo "<br>Venta".($i+1);
                
	        $suma=$suma+$venta;
        }
        $media=$suma/$n;
        
        echo "La media de las ventas es: ".$media;
        
        }       
        ?>
        </section>    
    </body>
</html>
