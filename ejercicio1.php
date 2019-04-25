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
        <form action="#" method="get">
            Hasta que numero <input type="text" name="n"><br>
            <input type="submit" name="b1">
        </form>
        
        <?php
        if (isset($_GET["b1"])) {
                $n=$_GET["n"];
                $f=$n;
                $i=1;
                while ($i<$n) {
                	$f=$f*$i;
                	$i++;
                }

                echo "El factorial es ".$f;

	        }
        ?>
        </section>    
    </body>
</html>
