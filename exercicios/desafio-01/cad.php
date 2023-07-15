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
        
        echo "O seu numero é $num\n, <br>O anctecessor é " . $num - 1 . " <br>É o sucessor " . $num + 1;
        
    ?>
    <br><button onclick="javascript:window.location.href='index.html'">Voltar</button>
    
</body>
</html>