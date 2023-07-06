<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 02</title>
</head>
<body>
    <main>
        <h1>Números aleatorios</h1>
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);

            echo "Gerando um número aleatório entre $min é $max. <br>O valor gerado foi $num"
        ?>
    </main>
    
</body>
</html>