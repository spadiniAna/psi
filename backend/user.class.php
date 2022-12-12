<?php

include_once 'conn.class.php';

class user extends conn {

    private $id;
    private $nome;
    private $email;
    private $senha;
    private $nivel;

    public function getId(){
        return $this -> id;
    }

    public function getNome(){
        return $this -> nome;
    }
    
    public function getEmail(){
        return $this -> email;
    }
    
    public function getSenha(){
        return $this -> senha;
    }
    
    public function getNivel(){
        return $this -> nivel;
    }

    public function setId($a){
        $this -> id = $a;
    }

    public function setNome($a){
        $this -> nome = $a;
    }

    public function setEmail($a){
        $this -> email = $a;
    }

    public function setSenha($a){
        $this -> senha = $a;
    }

    public function setNivel($a){
        $this -> nivel = $a;
    }

    public function inserir(){

        $pdo = $this->connect();

            if($this->id !== null && $this->id != ''){

                $sql = 'UPDATE user
                        SET nome = :nome, email = :email, senha = :senha, nivel = :nivel
                        WHERE id = :id';

            }else{

                $sql = 'INSERT INTO user
                        (nome, email, senha, nivel)
                        VALUES(:nome, :email, :senha, :nivel)';

            }

            $resultado = $pdo->prepare($sql);

                $resultado->bindValue(':nome', $this->nome);
                $resultado->bindValue(':email', $this->email);
                $resultado->bindValue(':senha', $this->senha);
                $resultado->bindValue(':nivel', $this->nivel);

                if($this->id !== null && $this->id != ''){

                    $resultado->bindValue(':id', $this->id);

                }

            $resultado->execute();
            
        $pdo = $this->disconnect();

    }

    public function excluir(){
        
        $pdo = $this->connect();

            if($this->id !== null && $this->id != ''){

                $sql = 'DELETE FROM user
                        WHERE id = :id';

            }

            $resultado = $pdo->prepare($sql);
                    
                $resultado->bindValue(':id', $this->id);
                
            $resultado->execute();
            
        $pdo = $this->disconnect();

    }

    public function listar(){
        
        $pdo = $this->connect();

            if($this->id !== null && $this->id != ''){

                $sql = 'SELECT * FROM user
                        WHERE id = :id';

            }else{

                $sql = 'SELECT * FROM user';

            }

            $resultado = $pdo->prepare($sql);
                
                if($this->id !== null && $this->id != ''){

                    $resultado->bindValue(':id', $this->id);
                
                }
                
            $resultado->execute();
            
        $pdo = $this->disconnect();
        
        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }

    public function buscar($pesquisa){
        
        $pdo = $this->connect();

            if($pesquisa != ''){

                $sql = 'SELECT * FROM user
                        WHERE nome LIKE :pesquisa
                        OR email LIKE :pesquisa';

            }else{

                $sql = 'SELECT * FROM user';

            }

            $resultado = $pdo->prepare($sql);
                
                if($pesquisa != ''){

                    $resultado->bindValue(':pesquisa', '%'.$pesquisa.'%');
                
                }
                
            $resultado->execute();
            
        $pdo = $this->disconnect();
        
        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }

}