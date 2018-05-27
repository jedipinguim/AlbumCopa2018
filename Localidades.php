<?php
class Localidades
{
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function listarLocalidades() {

        $sql = "SELECT id, descricao FROM localidades";

        $resultado = mysqli_query($this->conexao, $sql);
        
        $linhas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        return $linhas;
    }

}
