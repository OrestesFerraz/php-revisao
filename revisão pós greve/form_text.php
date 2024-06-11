<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        input,
        textarea {
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <?php
    $tamanho = filter_input(INPUT_POST, "tamanho", FILTER_SANITIZE_SPECIAL_CHARS);
    $cor = filter_input(INPUT_POST, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    $text = filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);
    $enviar = filter_input(INPUT_POST, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

    <div class="container-fluid">
        <h1>Revisão DWS-2 - Atividade com POST</h1>
        <hr>
        <form action="form_text.php" method="post">
            <label for="text">Texto:</label>
            <textarea id="text" name="text" cols="60"
                rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci deserunt ea quas placeat hic non vero! Voluptatem deserunt repellendus similique, aliquid, et nesciunt expedita ducimus autem dicta harum, eveniet illo.</textarea><br><br>
            <label for="cor">Cor:</label>
            <input type="color" name="cor" id="cor" value="#6A5ACD"><br><br>
            <label for="tamanho">Tamanho:</label>
            <input type="radio" name="tamanho" id="tamanho" value="small"> Pequeno
            <input type="radio" name="tamanho" id="tamanho" checked value="medium"> Médio
            <input type="radio" name="tamanho" id="tamanho" value="large"> Grande <br><br>
            <input type="submit" value="Enviar" name="enviar">
            <input type="reset" value="Limpar">
        </form>
        <hr>

        <style>
            .text-result {
                color:
                    <?= $cor; ?>;
                font-size:
                    <?= $tamanho; ?>;
            }
        </style>

        <?php
        if (isset($_POST["enviar"])) {
            echo '<h2>Resultado:</h2>';
            echo "<p class='text-result'>$text</p>";
            echo '<a href="form_text.php">Limpar resultado</a>';
            echo '<hr>';
        }
        ?>


        <a href="index.php">Voltar ao menu de navegação</a>
    </div>
</body>

</html>