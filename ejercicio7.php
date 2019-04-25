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
            Cuantos empleados <input type="text" name="n"><br>
            <input type="submit" name="b1"><br>
            Nombre <input type="text" name="n"><br>
            Codigo Empleado <input type="text" name="num"><br>
            Sueldo <input type="text" name="num"><br>
            <input type="submit" name="b2">
        </form>
        <?php
        if(isset($_GET["b1"])){
            $n=$_GET["n"];
            $nom=$_GET["nombre"];
            $codEmpl=$_GET["codEmpl"];
            $sueldo=$_GET["sueldo"];
            while ($i<=$n) {
            
            if ($sueldo<650) {
                $aumento= $sueldo * 0.15;
                $suelTotal= $sueldo + $aumento;
            }
            if ($sueldo>=650 && $sueldo<=1000) {
                $aumento= $sueldo * 0.12;
                $suelTotal= $sueldo + $aumento;  
            }
             if ($sueldo>1000) {
                $aumento= $sueldo * 0.09;
                $suelTotal= $sueldo + $aumento;
            }
            $i=$i + 1;
	  
	    $monTotal= $monTotal + $suelTotal;
            
            echo "Nombre: ".$nombre;
            echo "Codigo Empleado: ".$codEmpl;
            echo "Sueldo: ".$sueldo;
            echo "Aumento: ".$aumento;
            echo "Monto Total: ".$monTotal;
        }
        ?>
        </section>    
    </body>
</html>
