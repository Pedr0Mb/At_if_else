<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="Temperatura.css">
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

    $temperatura = $_POST['Temperatura'];
   
    if($temperatura == ""){
      echo"Temperatura Inválida";
    }else{
      if($temperatura >= 25){
        echo"Temperatura: ",$temperatura,"<br>";
        echo"Situação: Calor";
     }elseif($temperatura >= 15){
      echo"Temperatura: ",$temperatura,"<br>";
      echo"Situação: Razoavel";
     }elseif($temperatura >= 0){
      echo"Temperatura: ",$temperatura,"<br>";
      echo"Situação: Muito Frio";
     }else{
      echo"Temperatura: ",$temperatura,"<br>";
      echo"Situação: Congelante";
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