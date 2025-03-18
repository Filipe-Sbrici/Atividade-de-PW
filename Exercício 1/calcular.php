<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>

<?php

        $Nome = $_POST ['nome']

        $xbu = 6 * ((int)$_POST ['xbu']);
        $xsa = 8 * ((int)$_POST ['xsa']);
        $xba = 10 * ((int)$_POST ['xba']);
        $xtu = 12 * ((int)$_POST ['xtu']);
        $xdu = 15 * ((int)$_POST ['xdu']);

        $agu = 2 * ((int)$_POST ['agu']);
        $suc = 5 * ((int)$_POST ['suc']);
        $lat = 3 * ((int)$_POST ['lat']);
        $sei = 5 * ((int)$_POST ['sei']);
        $lit = 8 * ((int)$_POST ['lit']);


        $tot = $xbu + $xsa + $xba + $xtu + $xdu + $agu + $suc + $lat + $sei + $lit; 
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>Olá $Nome, o total a pagar é de $tot</p>";


        if ($xbu != 0)
        {
            $xbu = $xbu / 6;
            echo <p class = "tex">você comeu $xbu X-burguers</p> ;
        }else{}

        if ($xsa != 0)
        {
            $xsa = $xsa / 8;
            echo "você comeu $xsa X-saladas" ;
        }else{}

        if ($xba != 0)
        {
            $xba = $xba / 10;
            echo "você comeu $xba X-bacons" ;
        }else{}

        if ($xtu != 0)
        {
            $xtu = $xtu / 12;
            echo "você comeu $xtu X-tudo"; 
        }else{}

        if ($xdu != 0)
        {
            $xdu = $xdu / 15;
            echo "você comeu $xdu X-duplos" ;
        }else{}




?>
    
</body>
</html>