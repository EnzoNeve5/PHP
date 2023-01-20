<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - cursoemvideo.com</title>
</head>
<body>
<div>
    <?php
        $x = "abc";
        $$x = "def";
        echo "o conteudo da variavel X e $x";
        echo "<br/>A variavel ABC criada recebeu o valor $abc";
    ?>
</div>
</body>
</html>