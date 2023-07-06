<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP Conversor</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <?php 
            //cotaçaõ 4.92
            $cotação = 4.92;

            $real = $_REQUEST["dinheiro"];

            $dola = $real / $cotação;

            echo "Você tem a quantia de $dola";
        ?>

    </main>
    
</body>
</html>