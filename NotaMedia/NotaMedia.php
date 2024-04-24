<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="NotaMedia.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calcular Nota Media</title>
</head>
<body class="body">
    <header class="titulo">Resultado Nota Media</header>
    <main class="main">
      <section class="secFormRes">
        <div class="resultado">
   <?php

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
   
if($nota1 < 0 ||$nota1 > 10 ||  $nota2 < 0 ||$nota2 > 10 || $nota3 < 0 ||$nota3 > 10 ){
   echo"<center> Notas inválidas <center>  <br>";
}else{
   $notaMed = ($nota1 + $nota2 + $nota3) / 3;
   
   if(round($notaMed) >= 9){
      echo"Sua nota: ",round($notaMed),"<br>";
      echo"Menção: MB";
   }elseif(round($notaMed) >= 7){
      echo"Sua Nota: ",round($notaMed),"<br>";
      echo"Menção: B";
   }elseif(round($notaMed) >= 5){
      echo"Sua nota: ",round($notaMed),"<br>";
      echo"Menção: R";
   }else{
      echo"Sua nota: ",round($notaMed),"<br>";
      echo"Menção: I";
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