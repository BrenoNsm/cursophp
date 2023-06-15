<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <head>
        <h1>Resultado do processamento</h1>
    </head>
    <main>
        <?php 
            //var_dump($_GET)
            $nome = $_GET["nome"];
            $Sname = $_GET["Sobrenome"];

            echo "<p>É um prazer te conhecer, $nome $Sname! Este é o seu site!"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>