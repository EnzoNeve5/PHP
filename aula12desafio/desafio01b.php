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
        $i = 1;
        $num = isset($_GET["num"])?$_GET["num"]:1;  
        do {
            echo $num ."x". $i ."=". ($num*$i) ."<br/>";
            $i++;
        } while ($i<=10);
    ?>
</div>
</body>
</html>
 