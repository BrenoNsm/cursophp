<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio-02</title>
</head>
<body>
    <head>
        <h1>Titulo do Desafio</h1>
    </head>
    <p>Gerando um número aleatorio entre 0 e 100...</p>

    <form action="btn" method="get">
        <button type="submit" name="meubtn">Gerar um número 🔄</button>
    </form>
    <?php 
        if (isset($_GET['meubtn'])) {
            $numeroAleatorio = rand(0, 100);
            echo "O número aleatório gerado é " . $numeroAleatorio;
        }
    ?>
   
    
</body>
</html>