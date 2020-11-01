<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário simples</title>
</head>
<body>
    
    <?php

        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Nome não informado]"; 
        $ano = isset ($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"]: "[Sexo não informado]";
        $idade = date("Y") - $ano;

        echo "$nome é do sexo $sexo e tem $idade anos!";
    ?>


    <a href="index.html">Voltar</a>

</body>
</html>

