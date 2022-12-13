<?php

include '../backend/blog.class.php';

$blog = new blog();

if(isset($_GET['id'])){

  $blog->setId($_GET['id']);

    $blogs = $blog->listar();

      foreach($blogs as $b){

        $id = $b['id'];
        $titulo = $b['titulo'];
        $subtitulo = $b['subtitulo'];
        $texto = $b['texto'];
        $img = $b['img'];

      }
  }
  ?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <header>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <title>Blog</title>
    </header>
    <body>
        <?php
        include_once 'header.php';
        ?>

        <div>
            <main>
                <!--
                --><!--
                -->
                <div class="container" style="margin-top: 20px;"> 
                    <div class="row">
                        <div  class="col-10 position-relative top-0 start-50 translate-middle-x">
                            <h2 class="display-6" style="color: #458890; padding-left: 30px;"><?php  if(isset($titulo)){ echo $titulo; }  ?>
                            <small class="text-muted" style="color: #458890; font-size: 25px;"><?php  if(isset($subtitulo)){ echo $subtitulo; }  ?></small></h2>
                            <hr style="color: #458890;">
                            <p style="text-align: justify; margin-left: 50px; margin-right: 50px;"><?php  if(isset($texto)){ echo $texto; }  ?></p>
                            <img class="position-relative top-0 start-50 translate-middle-x" src="imagens/<?php  if(isset($img)){ echo $img; } ?>" alt="">
                            <hr style="color: #458890;">
                            <div class="row">
                                <div class="col-8">
                                    <a href="blog.php" class="btn mt-3" style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">
                                    Voltar</a>
                                </div>
                                <div class="col-4 text-end">
                                    <button href="excluir('<?php if(isset($id)){ echo $id; } ?>')" class="btn mt-3" style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">
                                    Excluir</button>

                                    <button onclick="editar('<?php if(isset($id)){ echo $id; } ?>')" class="btn mt-3" style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">
                                    Editar</button>
                                <div>
                            </div>
                        </div>
                    
                </div></div>
            </main>
        </div>

        <?php
        include_once 'footer.php';
        ?>
        
        
    <script>

        function excluir(n){

            let text = "Realmente deseja excluir?";
            if (confirm(text) == true){
                window.location = '../excluir_blog.php?id=' + n;
            }
        }

        function editar(n){

            window.location = 'criar_blog.php?id=' + n; 
        }

    </script>


    </body>
</html>
