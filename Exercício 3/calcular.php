<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<h1>Exercício 3</h1>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Preco = isset($_POST['Prec']) ? floatval($_POST['Prec']) : 0;
        $FormaP = isset($_POST['Form']) ? $_POST['Form'] : "";
        $Parcela = isset($_POST['Parc']) ? intval($_POST['Parc']) : 1;
        $Precof = 0;

        if ($FormaP == "Vista") {
            $Precof = $Preco * 0.9;
        } elseif ($FormaP == "Parcelado") {
            if ($Parcela > 6) {
                $Precof = $Preco + ($Preco * 0.2);
            } elseif ($Parcela >= 4) {
                $Precof = $Preco + ($Preco * 0.1);
            } else {
                $Precof = $Preco;
            }
        }

        echo "<p style='color: rgb(227, 228, 241); font-family: Comic Sans MS; font-size: 20px;'>O preço final é de R$$Precof</p>"; 
    }
?>

</body>
</html>
      



