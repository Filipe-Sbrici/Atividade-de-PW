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


        $qxbu = 6 * ($xbu);
        $qxsa = 8 * ($xsa);
        $qxba = 10 * ($xba);
        $qxtu = 12 * ($xtu);
        $qxdu = 15 * ($xdu);

        $qagu = 2 * ($agu);
        $qsuc = 5 * ($suc);
        $qlat = 3 * ($lat);
        $qsei = 5 * ($sei);
        $qlit = 8 * ($lit);

        $tot = $qxbu + $qxsa + $qxba + $qxtu + $qxdu + $qagu + $qsuc + $qlat + $qsei + $qlit; 

        
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>O total a pagar é de $tot</p>";
        
?>
    
</body>
</html>