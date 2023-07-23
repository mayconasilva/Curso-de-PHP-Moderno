<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
    <link rel="stylesheet" href="../styles/main.css">

</head>

<body>
    <header>
        <h1>Testes de Números Primitivos</h1>
    </header>
    <main>
        <p>
            <?php
                // $num = 010;
                // echo "O valor da variável é $num";
                // $v = "Maycon";
                // var_dump($v);
                // $num = (integer) 3e2;
                // echo "O valor é $num";
                // var_dump($num)
                // $casado = true;
                // echo "O VALOR PARA CASADO É $casado"
                // $vet = [6,0,2,5,2,5,5];
                // var_dump($vet)
                class Pessoa {
                    private string $nome;
                }
                $p = new Pessoa;
                var_dump($p)
            ?>
        </p>
    </main>
</body>

</html>