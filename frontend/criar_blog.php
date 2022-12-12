<?php

include '../backend/blog.class.php';

if(isset($_GET['id'])){

  $blog = new blog();
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
                <div class="container" style="padding-top: 20px;">
                <div class="col-10 position-relative top-0 start-50 translate-middle-x">
                        <h2 class="display-6" style="color: #458890; padding-left: 30px;">Blog</h2>
                    <hr>
                    <div class="">
                        <form method="POST" action="../backend/salvar_blog.php" style="border: 1px solid #feb9b4; padding: 50px; box-shadow: 5px 5px 10px #f4d1be;">
                                                    
                            <?php if(isset($id)){ ?>
                                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                            <?php } ?>
                        
                            <div class="form-floating mb-3">
                                <input class="form-control form-control-lg" type="text" id="titulo" name="titulo" placeholder="Título" value="<?php if(isset($titulo)){ echo $titulo; } ?>" required/>
                                <label for="titulo" class="form-label fw-light">Título</label>
                            </div>

                            <div class="form-floating mb-4">                                
                                <input class="form-control form-control-lg" type="text" id="subtitulo" name="subtitulo" placeholder="Subtítulo" value="<?php if(isset($subtitulo)){ echo $subtitulo; } ?>" required/>
                                <label for="subtitulo" class="form-label fw-light">Subtítulo</label>
                            </div>

                            <div class="form-floating mb-4">                                
                                <textarea class="form-control form-control-lg" id="texto" name="texto" placeholder="Corpo da publicação" rows="10" value="<?php if(isset($texto)){ echo $texto; } ?>" required></textarea>
                                <label for="texto" class="form-label fw-light">Corpo da publicação</label>
                            </div>

                            <div class="col-5 mb-4"> 
                                <label for="img" class="form-label fw-light">Imagem</label>                               
                                <input class="form-control" type="file" id="img" name="img" value="<?php if(isset($img)){ echo $img; } ?>"/>
                            </div>

                            <div style="text-align: center;">
                                <input class="btn" type="submit" value="Enviar"
                                style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;"/>
                            </div>

                        </form>
                        
                        <div class="">
                            <a href="blog.php" class="btn mt-5" style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">
                            Voltar</a>
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