<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
<form method="get" action="desafio02.php">
Número: <select name="num">
    <?php
        $i = 1;
        do {
            echo "<option value='$i'>$i</option>";
            $i++;
        } while ($i<=10);
    ?>
</select>
<input type="submit" value="Tabuada"/>
</form>
</div>
</body>
</html>