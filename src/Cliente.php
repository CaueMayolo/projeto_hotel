<?php

class Cliente implements ActiveRecord{

    private int $id_cliente;
    
    public function __construct(
        private string $nome,
        private string $sobrenome,
        private string $cpf,
        private string $telefone,
        ){
    }

    public function setIdCliente(int $id_cliente):void{
        $this->id_cliente = $id_cliente;
    }

    public function getIdCliente():int{
        return $this->id_cliente;
    }

    public function setNome(string $nome):void{
        $this->nome = $nome;
    }

    public function getNome():string{
        return $this->nome;
    }

    public function setSobrenome(string $sobrenome):void{
        $this->sobrenome = $sobrenome;
    }

    public function getSobrenome():string{
        return $this->sobrenome;
    }

    public function setCpf(string $cpf):void{
        $this->cpf = $cpf;
    }

    public function getCpf():string{
        return $this->cpf;
    }

    public function setTelefone(string $telefone):void{
        $this->cpf = $telefone;
    }

    public function getTelefone():string{
        return $this->telefone;
    }

    public function existeCliente($cpf){
        $conexao = new MySQL();
        $sql = "SELECT cpf FROM cliente WHERE cpf = '$cpf'";
        $resultados = $conexao->consulta($sql);
        $existem = count($resultados);
        if(1 == $existem){
            return true;
        }
        else{
            return false;
        }
    }

    public function save():bool{
        $conexao = new MySQL();
        $existe = $this->existeCliente($this->cpf);
        if (!$existe) {
            $sql = "INSERT INTO cliente (nome,sobrenome,cpf,telefone) VALUES ('{$this->nome}','{$this->sobrenome}','{$this->cpf}','{$this->telefone}')";
            return $conexao->executa($sql);
        } else if ($existe and isset($this->id_cliente)) {
            $sql = "UPDATE cliente SET nome = '{$this->nome}' ,sobrenome = '{$this->sobrenome}',cpf = '{$this->cpf}',telefone = '{$this->telefone}' WHERE id_cliente = {$this->id_cliente}";
            return $conexao->executa($sql);
        }else{
            return false;
        }
    }

    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM cliente WHERE id_cliente = {$this->id_cliente}";
        return $conexao->executa($sql);
    }

    public static function find($id_cliente):Cliente{
        $conexao = new MySQL();
        $sql = "SELECT * FROM cliente WHERE id_cliente = {$id_cliente}";
        $resultado = $conexao->consulta($sql);
        $p = new Cliente($resultado[0]['nome'],$resultado[0]['sobrenome'],$resultado[0]['cpf'],$resultado[0]['telefone']);
        $p->setIdCliente($resultado[0]['id_cliente']);
        return $p;
    }
    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM cliente";
        $resultados = $conexao->consulta($sql);
        $clientes = array();
        foreach($resultados as $resultado){
            $p = new Cliente($resultado['nome'],$resultado['sobrenome'],$resultado['cpf'],$resultado['telefone']);
            $p->setIdCliente($resultado['id_cliente']);
            $clientes[] = $p;
        }
        return $clientes;
    }

    
}
