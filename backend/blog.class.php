<?php

include_once 'conn.class.php';

class blog extends conn {

    private $id;
    private $titulo;
    private $subtitulo;
    private $texto;
    private $img;

    public function getId(){
        return $this -> id;
    }
    
    public function getTitulo(){
        return $this -> titulo;
    }
    
    public function getSubtitulo(){
        return $this -> subtitulo;
    }
    
    public function getTexto(){
        return $this -> texto;
    }
    
    public function getImg(){
        return $this -> img;
    }

    public function setId($a){
        $this -> id = $a;
    }

    public function setTitulo($a){
        $this -> titulo = $a;
    }

    public function setSubtitulo($a){
        $this -> subtitulo = $a;
    }

    public function setTexto($a){
        $this -> texto = $a;
    }

    public function setImg($a){
        $this -> img = $a;
    }

    public function inserir(){

        $pdo = $this->connect();

        if($this->id !== null && $this->id != ''){

            $sql = 'UPDATE blog
                    SET titulo = :titulo, subtitulo = :subtitulo, texto = :texto, img = :img
                    WHERE id = :id';

        }else{

            $sql = 'INSERT INTO blog
                    (titulo, subtitulo, texto, img)
                    VALUES(:titulo, :subtitulo, :texto, :img)';

        }

        $img = "";

        if($this->img !== null && $this->img != ''){
            $img = $this->addImg();

        }

        $resultado = $pdo->prepare($sql);

            $resultado->bindValue(':titulo', $this->titulo);
            $resultado->bindValue(':subtitulo', $this->subtitulo);
            $resultado->bindValue(':texto', $this->texto);
            $resultado->bindValue(':img', $img);

            if($this->id !== null && $this->id != ''){

                $resultado->bindValue(':id', $this->id);

            }

        $resultado->execute();
        
    $pdo = $this->disconnect();

    }

    public function addImg(){
 
        if($this->img !== null && $this->img != ''){

            $this->img = $_FILES['img'];
                if(isset($_FILES['img']))
                {
                    $ext = strtolower(substr($_FILES['img']['name'],-5)); 
                    $new_name = date("Y.m.d-H.i.s") . $ext;
                    $dir = '../frontend/imagens/'; 
                    move_uploaded_file($_FILES['img']['tmp_name'], $dir.$new_name);
    
                    $this->img = $new_name;
                    return $new_name;
                } 
        }
    }

    public function excluir(){
        
        $pdo = $this->connect();
 
            if($this->id !== null && $this->id != ''){

                $sql = 'DELETE FROM blog
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

                $sql = 'SELECT * FROM blog
                        WHERE id = :id
                        ORDER BY id DESC LIMIT 10';
            }else{

                $sql = 'SELECT * FROM blog ORDER BY id DESC LIMIT 10';
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

                $sql = 'SELECT * FROM blog
                        WHERE titulo LIKE :pesquisa
                        OR subtitulo LIKE :pesquisa';

            }else{

                $sql = 'SELECT * FROM blog';
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