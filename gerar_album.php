<?php
include "conexao.php";

for ($i=1; $i < 682; $i++) { 
    /*
    $query = " INSERT INTO album(numero, quantidade) ".
             " VALUES ({$i}, 0);";
    */
            
    $alterar = " UPDATE album "
            ." SET quantidade= (select count(1) from ocorrencias where numero = {$i}) "
            ." WHERE numero = {$i}";
    
    /*if ($conn->query($query)===TRUE) {
        echo "Registro inserido com sucesso: {$i}<BR>";
    } else {
        echo "Falha ao inserir: {$i} - {$conn->error}<BR>";
    }
    */

    if ($conn->query($alterar)===TRUE) {
        echo "Registro Alterado com sucesso: {$i}<BR>";
    } else {
        echo "Falha ao Alterar: {$i} - {$conn->error}<BR>";
    }

    
}
    

    


