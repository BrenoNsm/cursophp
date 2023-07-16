<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media PHP</title>
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'];
        $valor2 = $_GET['v2'];
        $peso1 = $_GET['p1'];
        $peso2 = $_GET['p2'];
        
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="valor1">1° Valor</label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">
        <label for="peso">1° Peso</label>
        <input type="number" name="p1" id="p1"value="<?=$peso1?>">
        <label for="valor2">2° Valor</label>
        <input type="number" name="v2" id="v2"value="<?=$valor2?>">
        <label for="peso">2° Peso</label>
        <input type="number" name="p2" id="p2"value="<?=$peso2?>">
        <input type="submit" value="calcular media">

    </form>

    </main>
    <section id= dados>
        <?php 
            echo "<ul><li>A média simple é: ".($valor1 + $valor2) / 2 ."</li></ul>";
            echo"<ul><li>A média ponderada é: ".(int)($valor1 * $peso1) + (int)($valor2 * $peso2) / (int)$peso1 + $peso2 ." </li></ul>";
            
        ?>
        

    </section>
    
</body>
</html>