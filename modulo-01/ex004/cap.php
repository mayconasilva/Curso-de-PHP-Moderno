<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../styles/secundary.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
   <header>
        <h1>Resultado do Processamento</h1>
   </header>

   <section>
    <p>
        <?php
           $nome = $_GET["name"] ??"sem nome";
           $sobrenome = $_GET["sobrenome"] ??"sem sobrenome";
           echo "É um grande prazer te conhecer <strong>$nome $sobrenome</strong>. Este é o meu site";
        ?>
    </p>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </form>
   </section>
    
   
</body>