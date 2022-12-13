<?php

include '../backend/blog.class.php';

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
                <div class="container" style="padding-top: 20px;"> 
                <div  class="col-10 position-relative top-0 start-50 translate-middle-x">
                    <h2 class="display-6" style="color: #458890; padding-left: 30px;">Blog</h2>
                    <hr style="color: #458890;">
                </div>

                        <form method="GET" action="" role="search">
                            <div class="row d-flex justify-content-center">
                                <div class="col-6">
                                    <input type="search" class="form-control form-control-lg" name="busca" id="busca" placeholder="Buscar" 
                                    style="border: 1px solid rgb(254, 185, 180);">
                                </div>
                                <div class="col-2">
                                    <input type="submit" class="btn" value="Pesquisar" 
                                    style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">
                                </div>
                            </div>  

                        </form>
                        <div class="col-10 position-relative top-0 start-50 translate-middle-x">
                            <hr style="color: #458890;">
                        </div>
                        <div class=" col-10 mx-auto">

                        <?php

                        $blog = new blog();

                            if(isset($_GET['busca'])){
                            
                            $blogs = $blog->buscar($_GET['busca']);
                            
                            } else{

                                $blogs = $blog->listar();
                            }

                            if(count($blogs) > 0){
                        
                                foreach($blogs as $b){

                        ?>
                            <div class="card w-100 border-0">
                                <div class="card-body" style="border-bottom: 1px solid rgb(254, 185, 180);">
                                    <h4 class="card-title" style="color: #458890;"><?php echo $b['titulo'] ?> </h4>
                                    <p class="card-text ms-3"><?php echo $b['subtitulo'] ?> </p>
                                    <a href="show_blog.php?id= <?php echo $b['id'] ?> " class="btn" style="background-color: #79b5af; color: white;">Saiba mais</a>
                                </div>
                            </div>
                            <?php }} ?>
                            <div class="card w-100 border-0">
                                <div class="card-body" style="border-bottom: 1px solid rgb(254, 185, 180);">
                                    <h4 class="card-title" style="color: #458890;">Card title</h4>
                                    <p class="card-text ms-3">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn" style="background-color: #79b5af; color: white;">Saiba mais</a>
                                </div>
                            </div>

                            <div class="card w-100 border-0">
                                <div class="card-body" style="border-bottom: 1px solid rgb(254, 185, 180);">
                                    <h4 class="card-title" style="color: #458890;">Card title</h4>
                                    <p class="card-text ms-3">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn" style="background-color: #79b5af; color: white;">Saiba mais</a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <a href="criar_blog.php" class="btn mt-5" style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">
                                Adicionar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <?php
        include_once 'footer.php';
        ?>
    </body>
</html>