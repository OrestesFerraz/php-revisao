<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
         body {
            color: white;
            background-color: black;
            font-family: 'Courier New', Courier, monospace;
            text-align: center;
            font-size: 2vw;
            padding-left: 20vw;
            padding-right: 20vw;
        }
    </style>
<body>
    <h1>
        revisão dw2 data e hora
    </h1>
    <hr>
        <h1>
            <?php
                $datetime = new DateTime();
            ?> 
        </h1>
        <br>
        <br>
        <h1>
            <?php
                echo $datetime->format('Y-m-d H:i:s');
            ?>
        </h1>
    <hr>
    <h6>
        <?php
             $dateArray = getdate();
            print_r($dateArray);
        ?>
    </h6>
    
</body>
</html>