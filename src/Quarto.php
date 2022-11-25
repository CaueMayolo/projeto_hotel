<?php

class Quarto implements ActiveRecord{

    private int $id_quarto;
    
    public function __construct(
        private string $titulo,
        private string $autoras,
        private string $status){
    }

    public function setId(int $id):void{
        $this->id = $id;
    }

    public function getId():int{
        return $this->id;
    }

    public function setTitulo(string $titulo):void{
        $this->titulo = $titulo;
    }

    public function getTitulo():string{
        return $this->titulo;
    }

    public function setAutoras(string $autoras):void{
        $this->autoras = $autoras;
    }

    public function getAutoras():string{
        return $this->autoras;
    }

    public function setStatus(int $status):void{
        $this->status = $status;
    }

    public function getStatus():int{
        return $this->status;
    }

    public function save():bool{
        $conexao = new MySQL();
        if(isset($this->id)){
            $sql = "UPDATE livros SET titulo = '{$this->titulo}' ,autoras = '{$this->autoras}',status = {$this->status} WHERE id_quarto = {$this->id}";
        }else{
            $sql = "INSERT INTO livros (titulo,autoras,status) VALUES ('{$this->titulo}','{$this->autoras}',{$this->status})";
        }
        return $conexao->executa($sql);
        
    }
    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM livros WHERE id = {$this->id}";
        return $conexao->executa($sql);
    }

    public static function find($id):Livro{
        $conexao = new MySQL();
        $sql = "SELECT * FROM livros WHERE id = {$id}";
        $resultado = $conexao->consulta($sql);
        $p = new Livro($resultado[0]['titulo'],$resultado[0]['autoras'],$resultado[0]['status']);
        $p->setId($resultado[0]['id']);
        return $p;
    }
    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM livros";
        $resultados = $conexao->consulta($sql);
        $livros = array();
        foreach($resultados as $resultado){
            $p = new Livro($resultado['titulo'],$resultado['autoras'],$resultado['status']);
            $p->setId($resultado['id']);
            $livros[] = $p;
        }
        return $livros;
    }

    
}
