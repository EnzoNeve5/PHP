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
       $estado = isset($_GET["est"])?$_GET["est"]:0;
       switch($estado){
           case 1:
               $reg = "Região Norte";
               break;
           case 2:
               $reg = "Região Nordeste";
               break;
           case 3:
               $reg = "Região Centro-Oeste";
               break;
           case 4:
               $reg = "Região Sudeste";
               break;
           case 5:
               $reg = "Região Sul";
               break;
           default:
               $reg = "Região Inválida";
       }
       echo "Voce esta na $reg" 
    ?>
</div>
</body>
</html>
 