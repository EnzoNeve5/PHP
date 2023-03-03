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
        $ini = isset($_GET["ini"])?$_GET["ini"]:0;
        $fim = isset($_GET["fim"])?$_GET["fim"]:0;
        $inc = isset($_GET["inc"])?$_GET["inc"]:0;
         
        if ($ini < $fim) {
            while ($ini <= $fim) {
            echo "$ini ";
            $ini += $inc;
            }
        }
        else {
            while ($ini >= $fim) {
            echo "$ini ";
            $ini -= $inc;
            }
        }   
    ?>     
        <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 