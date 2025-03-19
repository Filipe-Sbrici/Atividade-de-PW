<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>

<form method = "post" action="calcular.php">


    <h1> Preço da Compra<input type="text" name="Prec"></h1>
    <h1> Forma de Pagamento<br>
    </br><input type="Radio" name="Vista"><br>
    </br>Parcelado <input type="Radio" name="Parcelado"></h1>
    <h1> Número de Parcelas <input type="text" name="Parc " min="2" max="12"></h1>
    <br></br>
    <input type="submit">
    

 
</form>
    
</body>
</html>