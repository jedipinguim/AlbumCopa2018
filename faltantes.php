<?php
include 'Figurinhas.php';
include "conexao.php";

$faltantes = new Figurinhas($conn);
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
        <h1>Faltantes</h1>       

        <hr>

        <?php

            $linhas = $faltantes->mostrarFaltantes();
            $saida = "";

            $j = count($linhas) / 15;
            $i = 1;

            echo "<TABLE class='table'>";
            foreach ($linhas as $l) {
    

                if ($i == 1) {
                    $i++;
                    echo "<tr>";
                    echo "<td>" . $l['numero']. " </td>";
                } elseif ($i < 15) {
                    $i++;
                    echo "<td>" . $l['numero']. " </td>";
                } else {
                    $i = 1;
                    echo "<td>" . $l['numero']. " </td>";
                    echo "</tr>";                    
                }                                  
                
            }

            echo "</TABLE>";
            echo "<br><hr><br>";
            echo "<strong>Quantidade de Faltantes: ". count($linhas). "</strong>";
        ?>
    </div>

</body>

</html>