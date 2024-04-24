<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="CalcImc.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calcular Imc</title>
</head>
<body class="body">
    <header class="titulo">Resultado IMC</header>
    <main class="main">
      <section class="secFormRes">
        <div class="resultado">
   <?php


    $Altura = $_POST['Altura'];
    $Peso = $_POST['Peso'];
if($Altura <= 0 || $Peso <=0){
   echo"<center> Números inválidos <center>  <br>";
}else{
   $Imc = $Peso / ($Altura * $Altura);
   
   if($Imc >= 40){
      echo"Seu Imc: ",round($Imc,2),"<br>";
      echo"Classificação: Obesidade Classe 3";
   }elseif($Imc >= 35){
      echo"Seu Imc: ",round($Imc,2),"<br>";
      echo"Classificação: Obesidade Classe 2";
   }elseif($Imc >= 30){
      echo"Seu Imc: ",round($Imc,2),"<br>";
      echo"Classificação: Obesidade Classe 1";
   }elseif($Imc >= 25){
      echo"Seu Imc: ",round($Imc,2),"<br>";
      echo"Classificação: Sobre Peso";
   }elseif($Imc >= 18.5){
      echo"Seu Imc: ",round($Imc,2),"<br>";
      echo"Classificação: Peso Normal";
   }else{
      echo"Seu Imc: ",round($Imc,2),"<br>";
      echo"Classificação: Magreza";
   }
}
    ?>
      <div class="botaos">
      <a href="../Index/index.html" class="btn btn-danger">Retornar</a>   
            </div>
    
        </div>
      </section>
    </main>
</body>
</html>