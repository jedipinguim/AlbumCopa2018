<?php
include 'Figurinhas.php';
include "conexao.php";

$repetidas = new Figurinhas($conn);
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
        <h1>Repetidas</h1>       

        <?php

            $linhas = $repetidas->mostrarRepetidas();
            $saida = "";

            foreach ($linhas as $l) {
                $saida = $saida . $l['numero']. ", ";
            }

            echo $saida;
        ?>
    </div>

    <br>

    <div class='container'>

        <table class='table'>
        <tr>
            <th>#</th>
            <th>Qtd</th>
        </tr>
        <?php

            $linhas = $repetidas->mostrarRepetidas();
            echo "Quantidade de Repetidas: ". count($linhas);
            foreach ($linhas as $l) {
                echo "<tr>";
                echo "<td>{$l['numero']}</td> <td>{$l['contador']} </td>";
                echo "</tr>";
            }
        ?>
        </table>
    </div>

</body>

</html>