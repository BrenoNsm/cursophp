<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $valor1  = $_GET['num'];
        $raiz = sqrt($valor1);
        $cub = pow($valor1, 1/3);
    ?>

    <h1>Informe o valor</h1>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>">
        <label for="Numero">Número</label>
        <input type="number" name="num" id="num" value="<?=$valor1?>">
        <input type="submit" value="Calcular Raízes">
    </form>

    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
        echo "Analisando o número $valor1, temos:";
        echo "<ul>
        <li>
            A sua raiz quadrada é: ". number_format($raiz,3,",")."
        </li>
        <li>A sua raiz cubica é:". number_format($cub,3,",")."</li>
        
        </ul>"
        ?>  

    </section>
    
</body>
</html>