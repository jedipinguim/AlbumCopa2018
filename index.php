<?php
include 'Figurinhas.php';
include "conexao.php";

$figurinhas = new Figurinhas($conn);
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

        <a href="formulario_figurinha.php">
            <button type="button" class="btn btn-primary btn-lg">Novas Figurinhas</button>
        </a>
        <a href="repetidas.php">
            <button type="button" class="btn btn-secondary btn-lg">Repetidas</button>
        </a>
        <a href="faltantes.php">
            <button type="button" class="btn btn-secondary btn-lg">Faltantes</button>
        </a>

        <br>
        <br>

        <ul>
        <?php
            $detalhes = $figurinhas->detalhesAlbum();

            foreach ($detalhes as $d) {
                echo "<li><strong>{$d['etiqueta']} :</strong> {$d['contador']}</li>";
            }
        ?>
        </ul>
        
    </div>

    <br>

    <div class='container'>

        <table class='table'>
        <tr>
            <th>#</th>
            <th>Qtd</th>
        </tr>
        <?php
            $figurinhas = new Figurinhas($conn);

            $linhas = $figurinhas->mostrarDetalhes();

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