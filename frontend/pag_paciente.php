<?php

include '../backend/pag.class.php';

?>

<!DOCTYPE HTML>
<html lang="pt-br">
    <header>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <title>Minha página</title>
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

                    <div id="pacienteSlide" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#pacienteSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#pacienteSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#pacienteSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/ramos.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Nome do paciente</h5>
                                        <p>Seja bem-vindo ao seu espaço!</p>
                                    </div>
                                </div>
                            </div>
                            
                        <?php

                        $pag = new pag();

                            $textos = $pag->listar();
                            
                            if(count($textos) > 0){

                            foreach($textos as $t){

                        ?>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/ramos.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><?php echo $t['titulo'] ?></h5>
                                        <a href="show_txt.php?id=<?php echo $t['id'] ?>" class="btn" style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">
                                        Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        <?php }} 

                         $img = new img();

                         $imagens = $img->listar();
                         
                         if(count($imagens) > 0){

                         foreach($imagens as $i){

                        ?>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/ramos.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><?php echo $i['titulo'] ?></h5>
                                        <a href="show_img.php?id=<?php echo $i['id'] ?>" class="btn" style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">
                                        Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        <?php }} 

                         $vid = new vid();

                         $videos = $vid->listar();
            
                         if(count($videos) > 0){

                         foreach($videos as $v){

                        ?>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/ramos.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><?php echo $v['titulo'] ?></h5>
                                        <a href="show_vid.php?id=<?php echo $v['id'] ?>" class="btn" style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">
                                        Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>

                        </div> 
                        
                        <div class="col-6 position-relative top-0 start-50 translate-middle-x">
                            <nav class="navbar">
                                <button type="button" class="btn" style="background-color: #feb9b4; color: white;" data-bs-toggle="modal" data-bs-target="#addtxt">Adicionar Texto</button>
                                <button type="button" class="btn" style="background-color: #feb9b4; color: white;" data-bs-toggle="modal" data-bs-target="#addimg">Adicionar Imagem</button>
                                <button type="button" class="btn" style="background-color: #feb9b4; color: white;" data-bs-toggle="modal" data-bs-target="#addvid">Adicionar Vídeo</button>
                            </nav>
                        </div>

                        <div class="modal fade" id="addtxt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" style="color: #458890;">Adicionar texto</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="../backend/salvar_pag.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control form-control-lg" type="text" id="titulo" name="titulo" placeholder="Título" required/>
                                                <label for="titulo" class="form-label fw-light">Título</label>
                                            </div>

                                            <div class="form-floating mb-4">                                
                                                <textarea class="form-control form-control-lg" id="texto" name="texto" placeholder="Texto" rows="10" required></textarea>
                                                <label for="texto" class="form-label fw-light">Texto</label>
                                            </div>                                        
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" style="background-color: #79b5af; color: white;" data-bs-dismiss="modal">Fechar</button>
                                        <a href="../backend/salvar_pag.php" class="btn" style="background-color: #feb9b4; color: white;">Adicionar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal fade" id="addimg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" style="color: #458890;">Adicionar imagem</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="../backend/salvar_Img.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control form-control-lg" type="text" id="titulo" name="titulo" placeholder="Título" required/>
                                                <label for="titulo" class="form-label fw-light">Título</label>
                                            </div>

                                            <div class="form-floating mb-4">                                
                                                <textarea class="form-control form-control-lg" id="texto" name="texto" placeholder="Texto" rows="10" required></textarea>
                                                <label for="texto" class="form-label fw-light">Texto</label>
                                            </div> 

                                            <div class="mb-3">
                                                <label for="img" class="form-label fw-light">Imagem</label>                               
                                                <input class="form-control" type="file" id="img" name="img" required/>
                                            </div>                                       
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" style="background-color: #79b5af; color: white;" data-bs-dismiss="modal">Fechar</button>
                                        <a href="../backend/salvar_Img.php" class="btn" style="background-color: #feb9b4; color: white;">Adicionar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                
                        <div class="modal fade" id="addvid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" style="color: #458890;">Adicionar vídeo</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="../backend/salvar_Vid.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control form-control-lg" type="text" id="titulo" name="titulo" placeholder="Título" required/>
                                                <label for="titulo" class="form-label fw-light">Título</label>
                                            </div>

                                            <div class="form-floating mb-4">                                
                                                <textarea class="form-control form-control-lg" id="texto" name="texto" placeholder="Texto" rows="10" required></textarea>
                                                <label for="texto" class="form-label fw-light">Texto</label>
                                            </div> 

                                            <div class="mb-3">
                                                <label for="vid" class="form-label fw-light">Vídeo</label>                               
                                                <input class="form-control" type="file" id="vid" name="vid" required/>
                                            </div>                                       
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" style="background-color: #79b5af; color: white;" data-bs-dismiss="modal">Fechar</button>
                                        <a href="../backend/salvar_Vid.php" class="btn" style="background-color: #feb9b4; color: white;">Adicionar</a>
                                    </div>
                                </div>
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