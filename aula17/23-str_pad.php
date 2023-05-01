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
        $nome = "Guanabara";
        $novo = str_pad($nome, 30, "o", STR_PAD_RIGHT);
        print("Meu professor $novo e lindo! <br/> ");
        $nome2 = "Guanabara";
        $novo2 = str_pad($nome2, 30, "o", STR_PAD_BOTH);
        print("Meu professor $novo2 e lindo! <br/> ");
        $nome3 = "Guanabara";
        $novo3 = str_pad($nome3, 30, "o", STR_PAD_LEFT);
        print("Meu professor $novo3 e lindo!");
    ?>
</div>
</body>
</html>
 