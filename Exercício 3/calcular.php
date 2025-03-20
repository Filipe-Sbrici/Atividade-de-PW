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
            } elseif ($Parcela > 4) {
                $Precof = $Preco + ($Preco * 0.1);
            } else {
                $Precof = $Preco;
            }
        }

        echo "O preço final é de R$ " . number_format($Precof, 2, ',', '.');
    }
?>
      



?>