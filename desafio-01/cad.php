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
        <h1>Seu resultado</h1>
    </head>
    <?php 
        $num = $_GET["num"];
        $numAnt = $num - 1;
        $numSuc = $num + 1;

        echo "O seu numero é $num\n";
        echo "<br>O antecessor: $numAnt"; 
        echo "<br>E o sucessor é $numSuc"; 
    ?>
    <br><button onclick="javascript:window.location.href='index.html'">Voltar</button>
    
</body>
</html>