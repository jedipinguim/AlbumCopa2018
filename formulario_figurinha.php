<?php
include 'Localidades.php';
include "conexao.php";

$localidades = new Localidades($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inserir Figurinha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="main.js"></script>
</head>

<body>

    <div class="container">
        <h1>Entrada de Figurinhas</h1>

        <br>

        <form action="cad_figurinha.php" method="POST">

            <div class="form-group">
                <label for="local">Local de Compra</label>
                <select name="local">

                <?php


                    $linhas = $localidades->listarLocalidades();

                    foreach ($linhas as $l) {
                        echo "<option value='{$l['id']}'>{$l['descricao']}</option>";
                    }
                ?>
                </select>

                <label for="figurinhas"></label>
                <textarea class="form-control" name="figurinhas" id="" cols="30" rows="10"></textarea>

                <input type="submit" value="Enviar">
                <input type="reset" value ="Limpar">
            </div>

        </form>
    </div>

</body>
</html>