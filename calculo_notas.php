<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
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
    
</body>
</html>

<?php
//obter valor do formulario

$nome = $_POST["nome"];
$nota1 = $_POST["n1"];
$nota2 = $_POST["n2"];




//calcular media 

$media = ($nota1+$nota2)/2;

echo " <br > <h1>A Média da nota do aluno é : $media <br> </h1>";

//definir situaçao fazendo teste de condiçao

if($media <4){

    echo  " <h1> O Aluno $nome foi Reprovado </h1>";
    

} else if($media >= 4 && $media < 6 ){ 
    
    echo " <h1> O Aluno $nome ficou de recuperaçao</h1>";
}
    else {
        echo  "  <h1> O Aluno $nome foi Aprovado</h1>";
        
    }

    echo "<h1>";

?>
</body>
</html>






