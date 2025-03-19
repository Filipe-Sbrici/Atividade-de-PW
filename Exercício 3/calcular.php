<?php
    
        $Preço = $_POST ['Prec'];
        $FormaP = $_POST ['Form'];
        $Parcela = $_POST ['Parc'];
        $Preçof = 0;

        if (isset($_POST['Vista'])){

            $Preçof = $Preço * 0.9;
            echo "O preço final é de $Preçof";
        }
        else if (isset($_POST['Parcelado'])){
            if ($Parcela > 6)
            {
                $Preçof = $Preço + ($Preço*0.2);
                echo "O preço final é de $Preçof";
            }
            elseif ($Parcela <=6 && $Parcela > 4)
            {
                $Preçof = $Preço + ($Preço*0.1);
                echo "O preço final é de $Preçof";
            }
            else 
            {
                  
                echo "O preço final é de $Preço";
            }
        }
      



?>