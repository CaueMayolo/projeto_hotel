<?php

class Funcionario implements ActiveRecord{

    private int $id_funcionario;
    
    public function __construct(private string $email,private string $senha){
    }

    public function setIdFuncionario(int $id_funcionario):void{
        $this->id_funcionario = $id_funcionario;
    }

    public function getIdFuncionario():int{
        return $this->id_funcionario;
    }

    public function setSenha(string $senha):void{
        $this->senha = $senha;
    }
    public function setEmail(string $email):void{
        $this->email = $email;
    }

    public function getSenha():string{
        return $this->senha;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function save():bool{
        $conexao = new MySQL();
        $this->senha = password_hash($this->senha,PASSWORD_BCRYPT); 
        if(isset($this->id_funcionario)){
            $sql = "UPDATE funcionario SET email = '{$this->email}' ,senha = '{$this->senha}' WHERE id_funcionario = {$this->id_funcionario}";
        }else{
            $sql = "INSERT INTO funcionario (email,senha) VALUES ('{$this->email}','{$this->senha}')";
        }
        return $conexao->executa($sql);
    }

    public static function find($id_funcionario):Funcionario{
        $conexao = new MySQL();
        $sql = "SELECT * FROM funcionario WHERE id_funcionario = {$id_funcionario}";
        $resultado = $conexao->consulta($sql);
        $u = new Funcionario($resultado[0]['email'],$resultado[0]['senha']);
        $u->setIdFuncionario($resultado[0]['id_funcionario']);
        return $u;
    }

    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM funcionario WHERE id_funcionario = {$this->id_funcionario}";
        return $conexao->executa($sql);
    }

    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM funcionario";
        $resultados = $conexao->consulta($sql);
        $funcionario = array();
        foreach($resultados as $resultado){
            $u = new Funcionario($resultado['email'],$resultado['senha']);
            $u->setIdFuncionario($resultado['id_funcionario']);
            $funcionario[] = $u;
        }
        return $funcionario;
    }

    public function authenticate():bool{
        $conexao = new MySQL();
        $sql = "SELECT id_funcionario,senha FROM funcionario WHERE email = '{$this->email}'";
        $resultados = $conexao->consulta($sql);
        if(password_verify($this->senha,$resultados[0]['senha'])){
            session_start();
            $_SESSION['id_funcionario'] = $resultados[0]['id_funcionario'];
            $_SESSION['email'] = $resultados[0]['email'];
            return true;
        }else{
            return false;
        }
    }
}

