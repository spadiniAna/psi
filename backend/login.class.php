<?php

include_once 'conn.class.php';


session_regenerate_id();

class login extends conn{

    private $email;
    private $senha;
    private $nivel;

    public function getEmail(){
        return $this -> email;
    }

    public function getSenha(){
        return $this -> senha;
    }

    public function getNivel(){
        return $this -> nivel;
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

    public function verificar(){ 
        
        $pdo = $this->connect();

        $sql = 'SELECT *
                FROM user
                WHERE email = :email';
        
        $resultado = $pdo->prepare($sql);

            $resultado->bindValue(':email', $this->email);

        $resultado->execute();

    $pdo = $this->disconnect();

    if($resultado->rowCount() == 1){

        $info = $resultado->fetchAll(PDO::FETCH_ASSOC);

        if($this->senha == $info[0]['senha']){

            $_SESSION['logado'] = true;

            $_SESSION['email'] = $info[0]['email'];

            if($this->nivel == $info[0]['nivel'] && $this->nivel == 'psi'){
                
                $_SESSION['adm'] = true;

                return true;

            }else{

                return false;
    
            }


            return true;

        }else{

            return false;

        }

    }

}

}