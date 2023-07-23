<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
    <header>
        <h1>Exemplo PHP</h1>
    </header>

    <main>
        <p>
            <?
            date_default_timezone_set('America/Sao_Paulo');
            echo "Hoje é dia " . date("d/M/Y");
            echo " e a hora atual é " . date("G:i:s");
            ?>
        </p>
    </main>



</body>

</html>