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

        $Nome = $_POST ['nome'];

        $xbu = $_POST ['xbu'];
        $xsa = $_POST ['xsa'];
        $xba = $_POST ['xba'];
        $xtu = $_POST ['xtu'];
        $xdu = $_POST ['xdu'];

        $agu = $_POST ['agu'];
        $suc = $_POST ['suc'];
        $lat = $_POST ['lat'];
        $sei = $_POST ['sei'];
        $lit = $_POST ['lit'];

        $qxbu = 6 * (int)$xbu;
        $qxsa = 8 * (int)$xsa;
        $qxba = 10 * (int)$xba;
        $qxtu = 12 * (int)$xtu;
        $qxdu = 15 * (int)$xdu;

        $qagu = 2;
        $qsuc = 5 ;
        $qlat = 3 ;
        $qsei = 5 ;
        $qlit = 8 ;


        $tot = $qxbu + $qxsa + $qxba + $qxtu + $qxdu + $qagu + $qsuc + $qlat + $qsei + $qlit; 
        echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>Olá $Nome, o total a pagar é de $tot</p>";

        if ($xbu != 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comeu $xbu X-Burguers</p>"; 
        }else{}

        if ($xsa > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comeu $xsa X-Saladas</p>";
        }else{}

        if ($xba > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comeu $xba X-Bacons</p>";
        }else{}

        if ($xtu > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comeu $xtu X-Tudo</p>";
        }else{}

        if ($xdu > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comeu $xdu X-Duplos</p>";
        }else{}

?>
    
</body>
</html>