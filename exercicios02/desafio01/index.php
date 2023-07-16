<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $valor1 = $_GET['div'];
        $valor2 = $_GET['Divisor'];
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="div">Dividendo</label>
            <input type="number" name="div" id="div" value="<?=$valor1?>">
            <label for="Divisor">Divisor</label>
            <input type="number" name="Divisor" id="Divisor" value="<?=$valor2?>">
            <input type="submit" value="Dividir">

        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
            $resultado = $valor1 / $valor2;

            echo "<p>O $valor1 é o dividendo,  $valor2 é o divisor, o resto" .$valor1 % $valor2." enquanto o resultado $resultado </p>"
        ?>
    </section>
    
</body>
</html>