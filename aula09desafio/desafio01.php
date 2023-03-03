<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $a = isset($_GET["nota1"])?$_GET["nota1"]:"[sem nota]";
      $b = isset($_GET["nota2"])?$_GET["nota2"]:"[sem nota]";
      $m = ($a + $b) / 2;
      echo "A média de $a e $b é $m <br/>";
      if ($m < 5) {
        $r = "REPROVADO";
      }
      elseif ($m >= 5 && $m < 7) {
        $r = "EM RECUPERAÇÃO";
      }
      else {
        $r = "APROVADO";
      }        
      echo "Este aluno está $r";     
    ?>
</div>
</body>
</html>
 