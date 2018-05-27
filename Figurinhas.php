<?php
class Figurinhas
{
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function mostrarDetalhes() {

        $sql = "SELECT numero, COUNT(1) as contador \n"
              . " FROM ocorrencias \n"
              . "GROUP BY numero  \n"
              . "ORDER BY 2 DESC";

        $resultado = mysqli_query($this->conexao, $sql);
        
        $linhas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        return $linhas;
    }

    public function mostrarRepetidas()
    {
        $sql = "SELECT numero, COUNT(1) AS contador\n"
            . "FROM ocorrencias \n"
            . "WHERE tipo = 'E'\n"
            . "GROUP BY numero\n"
            . "HAVING COUNT(1) > 1\n"
            . "ORDER BY 1";

        $resultado = mysqli_query($this->conexao, $sql);
        
        $linhas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    
        return $linhas;
    }

    public function mostrarFaltantes()
    {
        $sql = "SELECT numero\n"
             . "FROM album \n"
             . "WHERE quantidade = 0";
        
        $resultado = mysqli_query($this->conexao, $sql);

        $linhas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    
        return $linhas;
    }
    
    public function detalhesAlbum() {
        $sql = "SELECT * FROM `DetalhesAlbum`";

        $resultado = mysqli_query($this->conexao, $sql);
        
        $linhas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    
        return $linhas;
    }
}
