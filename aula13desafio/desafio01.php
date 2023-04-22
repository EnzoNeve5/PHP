<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
       h1 {
         font-family:Arial;
         font-size:25pt;
         color:red;
       }
    </style>
</head>
<body>
<div>
  <?php
    $n=isset($_GET["num"])?$_GET["num"]:1;
    $t=0;
    echo "Analisando os múltipos de $n ... </br><br/>";
    echo "Valores múltiplos:";
    for($c=1; $c <= $n; $c++) {
      if ($n%$c == 0) {
        echo "$c ";
        $t++;
      }
    }
    echo "<br/>Total de múltiplos: $t<br/>";
    if ($t > 2) {
      echo "RESULTADO: $n <h1><span class='foco'>NÃO É PRIMO!</h1></span>";
    }
    if ($t == 2) {
      echo "RESULTADO: $n <h1><span class='foco'>É PRIMO!</h1></span>";
    }
  ?>
  <br/><br/><a href="javascript:history.go(-1)">Voltar</a>
</div>
</div>
</body>
</html>