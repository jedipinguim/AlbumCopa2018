<?php
include "conexao.php";

$local = $_POST["local"];
$guid = uniqid();
$hoje = getdate();
$hoje = "{$hoje['year']}-{$hoje['mon']}-{$hoje['mday']}";

$linhas = $_POST["figurinhas"];

$linha_quebrada = explode("\n", $linhas);


echo "<a href='gerar_album.php'>Atualizar Album </a>";

foreach ($linha_quebrada as $i) {

    $query = " INSERT INTO ocorrencias(id_local, numero, tipo, nr_compra, dt_compra) ".
             " VALUES ({$local} , {$i} , 'E', '{$guid}', '{$hoje}'); ";

    if (!empty(trim($i))) 
        if ($conn->query($query)===TRUE) {
            echo "Registro inserido com sucesso: {$i}<BR>";
        } else {
            echo "Falha ao inserir: {$i} - {$conn->error}<BR>";
        }   
    

}

