<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .op {
            display: none;
        }
    </style>
</head>

<body>
    <?php
    $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_SPECIAL_CHARS);
    $display = filter_input(INPUT_GET, "display", FILTER_SANITIZE_SPECIAL_CHARS);
    $link = filter_input(INPUT_GET, "link", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

    <div class="container-fluid">
        <h1>Revisão DWS-2 - Atividade com GET</h1>
        <hr>
        <h3>Números: <a href="?num=3&display=block&link=none">3</a> , <a href="?num=4&display=block&link=none">4</a> ou <a
                href="?num=5&display=block&link=none">5</a></h3>
        <hr>

        <style>
            .op {
                display:
                    <?= $display; ?>;
            }
            .link{
                display:
                    <?= $link; ?>;
            }
        </style>

        <a class="link" href="index.php">Voltar ao menu de navegação</a>
        
        <div class="op">
            <h3><b>Operações</b></h3>
            <p>Soma: <b><?= $num; ?> + <?= $num; ?> = <?php echo $num + $num; ?></b></p>
            <p>Subtração: <b><?= $num; ?> - <?= $num; ?> = <?php echo $num - $num; ?></b></p>
            <p>Multiplicação: <b><?= $num; ?> * <?= $num; ?> = <?php echo $num * $num; ?></b></p>
            <p>Divisão: <b><?= $num; ?> / <?= $num; ?> = <?php echo $num / $num; ?></b></p>
            <p>Módulo: <b><?= $num; ?> % <?= $num; ?> = <?php echo $num % $num; ?></b></p>
            <p>Exponenciação: <b><?= $num; ?> ** <?= $num; ?> = <?php echo $num ** $num; ?></b></p>
            <a href="numeros.php">Limpar operações</a>
            <hr>
        </div>

        <a href="index.php">Voltar ao menu de navegação</a>
    </div>
</body>

</html>