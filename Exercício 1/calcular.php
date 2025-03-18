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

        $xbu = 6 * ($_POST ['xbu']);
        $xsa = 8 * ($_POST ['xsa']);
        $xba = 10 * ($_POST ['xba']);
        $xtu = 12 * ($_POST ['xtu']);
        $xdu = 15 * ($_POST ['xdu']);

        $agu = 2 * ($_POST ['agu']);
        $suc = 5 * ($_POST ['suc']);
        $lat = 3 * ($_POST ['lat']);
        $sei = 5 * ($_POST ['sei']);
        $lit = 8 * ($_POST ['lit']);


        $tot = $xbu + $xsa + $xba + $xtu + $xdu + $agu + $suc + $lat + $sei + $lit; 

        
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>O total a pagar é de $tot</p>";
        if ($xbu != 0)
        {
            $xbu = $xbu / 6;
            echo "você comeu $xbu X-burguers" 
        }

        if ($xsa != 0)
        {
            $xsa = $xsa / 8;
            echo "você comeu $xsa X-saladas" 
        }
        if ($xba != 0)
        {
            $xba = $xba / 10;
            echo "você comeu $xba X-bacons" 
        }
        if ($xtu != 0)
        {
            $xtu = $xtu / 12;
            echo "você comeu $xtu X-tudo" 
        }
        if ($xdu != 0)
        {
            $xdu = $xdu / 15;
            echo "você comeu $xdu X-duplos" 
        }




?>
    
</body>
</html>