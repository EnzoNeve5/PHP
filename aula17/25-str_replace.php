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
        $frase = "Gosto de estudar Matematica! Matematica e muito legal!";
        $novafrase = str_replace("Matematica","PHP", $frase);
        print($novafrase);
    ?>
</div>
</body>
</html>
 