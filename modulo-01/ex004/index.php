<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Formulários</title>
    <link rel="stylesheet" href="../styles/secundary.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
   <header>
        <h1>Apresente-se para nós</h1>
   </header>

   <section>
    <form action="./cap.php" method="get">

    <label for="name">Nome </label>
    <input type="text" name="name" id="idname">
    <label for="sobrenome">Sobrenome </label>
    <input type="text" name="sobrenome" id="idsobrenome">
    <input type="submit" value="Enviar">

    </form>
   </section>
    
   
</body>