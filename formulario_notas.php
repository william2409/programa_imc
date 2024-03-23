<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de notas</title>

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

    <h1>Cálculo da Média e Situação do Aluno</h1>
    <form action= "calculo_notas.php" method="POST">  

        <label for="nome"> Nome  </label>
            <input type="text" name="nome" id="nome" placeholder="Qual é o nome do aluno"><br><br><br>
        <label for="nota1"> Nota 1 </label>
            <input type="number" name="n1" step="0.01" id="nota1" placeholder="Informe nota 1"> <br> <br> <br>
        <label for="nota2"> Nota 2 </label>
            <input type="number" name="n2" step="0.01"  id="nota2" placeholder="Informe nota 2 "><br> <br>
            <input type="submit" value="calcular">


        

    </form>
   
    
</body>
</html>