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


<label>Preço: <input type="text" name="Prec"></label><br>
<label><input type="radio" name="Form" value="Vista"> À Vista</label><br>
<label><input type="radio" name="Form" value="Parcelado"> Parcelado</label><br>

    <label>Parcelas: <input type="number" name="Parc"></label><br>

    <input type="submit" value="Calcular">
</form>
    
</body>
</html>