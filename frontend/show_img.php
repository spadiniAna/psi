<?php

include '../backend/pag.class.php';

$imagem = new img();

if(isset($_GET['id'])){

  $imagem->setId($_GET['id']);

    $imgs = $imagem->listar();

      foreach($imgs as $i){

        $id = $i['id'];
        $titulo = $i['titulo'];
        $txt = $i['txt'];
        $img = $i['img'];

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

        <title>Minha Página</title>
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
                            <hr style="color: #458890;">
                            <p style="text-align: justify; margin-left: 50px; margin-right: 50px;"><?php  if(isset($txt)){ echo $txt; }  ?></p>
                            <img src="imagens/<?php  if(isset($img)){ echo $img; } ?>" alt="">
                            <hr style="color: #458890;">
                            <div class="">
                                <a href="pag_paciente.php?id=<?php if(isset($id)){ echo $id; } ?>" class="btn mt-3" style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">
                                Voltar</a>
                            </div>
                        </div>
                    
                </div></div>
            </main>
        </div>

        <?php
        include_once 'footer.php';
        ?>
    </body>
</html>
