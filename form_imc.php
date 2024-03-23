<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário IMC</title>
    <style type="text/css">

body{
    align-items: center;
    color: aqua;
    background-color:rgb(99, 100, 94);
    text-align: center;
}

</style>
</head>
<body>
<h1>Cálculo IMC </h1>
    <form action="calcu_imc.php" method="get"> 
        <label for="peso">Informe seu peso em Kg</label> 
        <input type="text" name="peso" id="idpeso"> <br> <br>
        <label for="altura">Informe sua altura em Metros</label>
        <input type="text" name="altura" id="idaltura"><br> <br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>