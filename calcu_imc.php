<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    
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
    <h1>Resultado do seu IMC</h1>
    <?php
       
       //Recebe a altura e o peso do formulario.
        $altura = $_GET["altura"];
        $peso = $_GET["peso"];
       
        //Transforma a "," em "." para fazer a operção.
        $new_peso = str_replace(",", ".", $peso);
        $new_altura = str_replace(",", ".", $altura);
        echo "<p>Peso $new_peso</p> <br> <p>Altura $new_altura</p>"; 
      
        //Diminui no número de casa decimais.
        $imc =number_format ($new_peso / ($new_altura * $new_altura),1);
        echo"$imc";
       
        // Iniciar as condições baseada no resultado.
        if ($imc < 17 ){
            echo"<p><h1>Seu IMC foi $imc, Muito abaixo do peso </h1> </p>";
        } else {
            if($imc>=17 && $imc<=18.49){
            echo"<p><h1>Seu IMC foi $imc, Abaixo do peso</h1></p>";
            } else {
                if($imc>=18.5 && $imc<=24.99){
                 echo"<p> <h1>Seu IMC foi $imc, Peso Normal</h1> </p>";
                } else {
                    if($imc>=25 && $imc<=29.99){
                    echo"<p> <h1>Seu IMC foi $imc, Acima do peso</h1></p>";
                    } else {
                        if($imc>=30 && $imc<=34.99){
                        echo"<p> <h1>Seu IMC foi $imc, Obesidade I</h1></p>";
                        } else {
                            if($imc>=35 && $imc<=39.99){
                            echo"<p><h1>Seu IMC foi $imc, Obesidade II(severa)</h1></p>";
                           } else {
                                if($imc>40){
                                echo"<p><h1>Seu IMC foi $imc, Obesidade III(mórbida)<h1></p>";
                             }
                           }  
                        }
                    }
                } 
            }

        } 
        
           
    
    ?>
    
</body>
</html>