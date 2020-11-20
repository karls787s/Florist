
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Estilop.css">
        <title></title>
    </head>
    <body>
        <?php
        $c1=$_POST['c1'];
        $c2=$_POST['c2'];
        $c3=$_POST['c3'];
        $prom=($c1+$c2+$c3)/3;
        $mensaje="";
        if(($prom>=70)&&($prom<80))
            {
            $mensaje="suficiente";
            }elseif($prom<=69){
                $mensaje="no acreditado";
            }elseif($prom>=80){
                $mensaje="acreditado";
            }
        
        
        echo "<b>Primer calificacion:</b>$c1<br>";
        echo "<b>Segunda calificacion:</b>$c2<br>";
        echo "<b>Tercera calificacion:</b>$c3<br>";
        echo "<b>Su promedio es de:</b>$prom $mensaje<br>";
        
        
        
        ?>
    </body>
</html>
