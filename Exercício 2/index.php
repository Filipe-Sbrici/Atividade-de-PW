<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<h1>Menu Loja de RPG:</h1>

<form method = "post" action="calcular.php">


    <h1>Insira seu nome<input type="text" name="nome" min="0" max="99"></h1>

    <br></br>

    <h1> Poções: </h1>

    <h2>Poção de Cura(7,00) <input type="number" name="cur" min="0" max="99"></h2>
    <h2>Poção de Mana(6,00) <input type="number" name="man" min="0" max="99"></h2>
    <h2>Poção da Sorte(15,00) <input type="number" name="sor" min="0" max="99"></h2>
    <h2>Poção de Resistência ao Fogo(12,00)  <input type="fog" name="xtu" min="0" max="99"></h2>
    <h2>Poção de Resistência ao Frio(12,00) <input type="fri" name="xdu" min="0" max="99"></h2>

    <br></br>

    <h1> Especiarias: </h1>

    <h2>Pó de fada(5,00) <input type="number" name="pdf" min="0" max="99"></h2>
    <h2>Cristais arcanos(12,00) <input type="number" name="cra" min="0" max="99"></h2>
    <h2>Óleos elementais(9,00) <input type="number" name="ole" min="0" max="99"></h2>
    <h2>Mandrágoras(23,00)  <input type="number" name="mad" min="0" max="99"></h2>
    <h2>Escamas de dragão(10,00) <input type="number" name="edd" min="0" max="99"></h2>

    <input type="submit">
</form>
    
</body>
</html>