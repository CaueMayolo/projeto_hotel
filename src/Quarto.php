<?php

class Quarto implements ActiveRecord{

    private int $id_quarto;
    
    public function __construct(
        private int $numero,
        private string $tipo,
        private string $status){
    }

    public function setIdQuarto(int $id_quarto):void{
        $this->id_quarto = $id_quarto;
    }

    public function getIdQuarto():int{
        return $this->id_quarto;
    }

    public function setNumero(string $numero):void{
        $this->numero = $numero;
    }

    public function getNumero():string{
        return $this->numero;
    }

    public function setTipo(string $tipo):void{
        $this->tipo = $tipo;
    }

    public function getTipo():string{
        return $this->tipo;
    }

    public function setStatus(int $status):void{
        $this->status = $status;
    }

    public function getStatus():int{
        return $this->status;
    }

    public function save():bool{
        $conexao = new MySQL();
        if(isset($this->id_quarto)){
            $sql = "UPDATE quarto SET numero = '{$this->numero}' ,tipo = '{$this->tipo}',status = {$this->status} WHERE id_quarto = {$this->id_quarto}";
        }else{
            $sql = "INSERT INTO quarto (numero,tipo,status) VALUES ('{$this->numero}','{$this->tipo}',{$this->status})";
        }
        return $conexao->executa($sql);
        
    }
    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM quarto WHERE id_quarto = {$this->id_quarto}";
        return $conexao->executa($sql);
    }

    public static function find($id_quarto):Quarto{
        $conexao = new MySQL();
        $sql = "SELECT * FROM quarto WHERE id_quarto = {$id_quarto}";
        $resultado = $conexao->consulta($sql);
        $p = new Quarto($resultado[0]['numero'],$resultado[0]['tipo'],$resultado[0]['status']);
        $p->setId($resultado[0]['id_quarto']);
        return $p;
    }
    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM quarto";
        $resultados = $conexao->consulta($sql);
        $quartos = array();
        foreach($resultados as $resultado){
            $p = new Quarto($resultado['numero'],$resultado['tipo'],$resultado['status']);
            $p->setIdQuarto($resultado['id_quarto']);
            $quartos[] = $p;
        }
        return $quartos;
    }

    
}
