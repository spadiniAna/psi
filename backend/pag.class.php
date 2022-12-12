<?php

include_once 'conn.class.php';

class pag extends conn {

    private $id;
    private $titulo;
    private $txt;

    public function getId(){
        return $this -> id;
    }

    public function getTitulo(){
        return $this -> titulo;
    }

    public function getTxt(){
        return $this -> txt;
    }

    public function setId($a){
        $this -> id = $a;
    }

    public function setTitulo($a){
        $this -> titulo = $a;
    }

    public function setTxt($a){
        $this -> txt = $a;
    }

    public function inserir(){
        
        $pdo = $this->connect();

        if($this->id !== null && $this->id != ''){

            $sql = 'UPDATE pag
                    SET titulo = :titulo, txt = :txt
                    WHERE id = :id';

        }else{

            $sql = 'INSERT INTO pag
                    (titulo, txt)
                    VALUES(:titulo, :txt)';

        }

        $resultado = $pdo->prepare($sql);

            $resultado->bindValue(':titulo', $this->titulo);
            $resultado->bindValue(':txt', $this->txt);

            if($this->id !== null && $this->id != ''){

                $resultado->bindValue(':id', $this->id);

            }

        $resultado->execute();
        
    $pdo = $this->disconnect();

}

    public function excluir(){
        
        $pdo = $this->connect();
 
            if($this->id !== null && $this->id != ''){

                $sql = 'DELETE FROM pag
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

                $sql = 'SELECT * FROM pag
                        WHERE id = :id
                        ORDER BY id';
            }else{

                $sql = 'SELECT * FROM pag ORDER BY id';
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

                $sql = 'SELECT * FROM pag
                        WHERE titulo LIKE :pesquisa';

            }else{

                $sql = 'SELECT * FROM pag';
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

class img extends conn {
    
    private $id;
    private $titulo;
    private $txt;
    private $img;

    public function getId(){
        return $this -> id;
    }

    public function getTitulo(){
        return $this -> titulo;
    }

    public function getTxt(){
        return $this -> txt;
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

    public function setTxt($a){
        $this -> txt = $a;
    }

    public function setImg($a){
        $this -> img = $a;
    }

    public function inserir(){
        
        $pdo = $this->connect();

        if($this->id !== null && $this->id != ''){

            $sql = 'UPDATE img
                    SET titulo = :titulo, txt = :txt, img = :img
                    WHERE id = :id';

        }else{

            $sql = 'INSERT INTO img
                    (titulo, txt, img)
                    VALUES(:titulo, :txt, :img)';

        }

        $img = "";

        if($this->img !== null && $this->img != ''){
            $img = $this->addImg();

        }

        $resultado = $pdo->prepare($sql);

            $resultado->bindValue(':titulo', $this->titulo);
            $resultado->bindValue(':txt', $this->txt);
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
                
            if(isset($_FILES['img'])){

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

                $sql = 'DELETE FROM img
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

                $sql = 'SELECT * FROM img
                        WHERE id = :id
                        ORDER BY id';
            }else{

                $sql = 'SELECT * FROM img ORDER BY id';
            }

            $resultado = $pdo->prepare($sql);
                
                if($this->id !== null && $this->id != ''){

                    $resultado->bindValue(':id', $this->id);
                
                }
                
            $resultado->execute();
            
        $pdo = $this->disconnect();
        
        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }
    
}

class vid extends conn {

    private $id;
    private $titulo;
    private $txt;
    private $vid;

    public function getId(){
        return $this -> id;
    }

    public function getTitulo(){
        return $this -> titulo;
    }

    public function getTxt(){
        return $this -> txt;
    }
    
    public function getVid(){
        return $this -> vid;
    }

    public function setId($a){
        $this -> id = $a;
    }

    public function setTitulo($a){
        $this -> titulo = $a;
    }

    public function setTxt($a){
        $this -> txt = $a;
    }

    public function setVid($a){
        $this -> vid = $a;
    }

    public function inserir(){
        
        $pdo = $this->connect();

        if($this->id !== null && $this->id != ''){

            $sql = 'UPDATE vid
                    SET titulo = :titulo, txt = :txt, vid = :vid
                    WHERE id = :id';

        }else{

            $sql = 'INSERT INTO vid
                    (titulo, txt, vid)
                    VALUES(:titulo, :txt, :vid)';

        }

        $vid = "";

        if($this->vid !== null && $this->vid != ''){
            $vid = $this->addVid();

        }

        $resultado = $pdo->prepare($sql);

            $resultado->bindValue(':titulo', $this->titulo);
            $resultado->bindValue(':txt', $this->txt);
            $resultado->bindValue(':vid', $vid);

            if($this->id !== null && $this->id != ''){

                $resultado->bindValue(':id', $this->id);

            }

        $resultado->execute();
        
        $pdo = $this->disconnect();
    }

    public function addVid(){
        
        if($this->vid !== null && $this->vid != ''){

            $this->vid = $_FILES['vid'];
                
            if(isset($_FILES['vid'])){

                $ext = strtolower(substr($_FILES['vid']['name'],-5)); 
                $new_name = date("Y.m.d-H.i.s") . $ext;
                $dir = '../frontend/videos/'; 
                move_uploaded_file($_FILES['vid']['tmp_name'], $dir.$new_name);
    
                $this->vid = $new_name;

                return $new_name; 
            } 
        }
    }

    public function excluir(){
        
        $pdo = $this->connect();
 
            if($this->id !== null && $this->id != ''){

                $sql = 'DELETE FROM vid
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

                $sql = 'SELECT * FROM vid
                        WHERE id = :id
                        ORDER BY id';
            }else{

                $sql = 'SELECT * FROM vid ORDER BY id';
            }

            $resultado = $pdo->prepare($sql);
                
                if($this->id !== null && $this->id != ''){

                    $resultado->bindValue(':id', $this->id);
                
                }
                
            $resultado->execute();
            
        $pdo = $this->disconnect();
        
        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }
    
}