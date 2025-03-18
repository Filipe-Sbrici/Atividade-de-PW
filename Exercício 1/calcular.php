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
        $num1 = $_POST ['num1'];
        $num2 = $_POST ['num2'];
        $num1 = $_POST ['num1'];
        $num2 = $_POST ['num2'];
        $num1 = $_POST ['num1'];
        $num2 = $_POST ['num2'];
        $num1 = $_POST ['num1'];
        $num2 = $_POST ['num2'];
        $num1 = $_POST ['num1'];
        $num2 = $_POST ['num2'];

        if ($num1 > $num2){
        echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>$num1 é maior que $num2</p>";

        }
        else if ($num2 > $num1){ 
                echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>$num2 é maior que $num1</p>";

        }
        else{
                echo "<p style='color: aliceblue; font-family: Comic Sans MS; font-size: 20px;'>$num2 é igual $num1</p>";

        }
?>
    
</body>
</html>