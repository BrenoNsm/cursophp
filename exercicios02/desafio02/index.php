<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2 PHP</title>
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'];
        $divisão = $valor1 / 1320;
        //$valorAbsoluto = abs($valor1)
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
        <label for="salario">Salario</label>
        <input type="number" name="v1" id="v1">
        <p>Salário mínimo atual de <strong>$1320,00</strong> </p>
        <input type="submit" value="calcular">
        </form>

    </main>
    <section id=resultado>
        <h2>Resultado final:</h2>
        <?php 
            echo "Quem receber um salário de R$".number_format($valor1, 2, ",", ".")." ganha ".number_format($divisão, 0 , ",", ".")." salários minímos +".number_format($divisão, 0 , ",", ".") * 1320 - $valor1 ."."
        ?>

    </section>
    
</body>
</html>