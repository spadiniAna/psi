<!DOCTYPE HTML>
<html lang="pt-br">
    <header>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>

        <title>Página Inicial</title>
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
                        
                        <div class="card w-100 mb-3 mx-auto border-0 px-0" style="max-width: 98%; height: 300px; background-color: #feb9b4; border-radius: 0;">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="img/psicologa.jpg" style="max-height: 300px; width: auto;" class="img" alt="">
                                </div>
                                <div class="col-8">
                                    <div class="card-body text-center mt-5">
                                        <h5 class="card-title text-light lead" style="font-size: 30px;"><strong>Michele Emer Spadini</strong></h5>
                                        <p class="card-text text-light" style="margin-left: 65px; margin-right: 60px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <a href="servicos.php" class="btn rounded-pill" style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;">Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>

                <section style="background-color: #9cd4cc;" class="my-5">
                    <div class="container"><p class="text-light">Entre em contato</p></div>
                </section>

                <div class="container">
                    <div  class="col-12 position-relative top-0 start-50 translate-middle-x">
                        <h2 class="display-6 text-center" style="color: #458890;">Blog</h2>
                        <hr style="color: #458890;">
                    </div>

                    <div id="carouselExampleCaptions" class="carousel slide col-8 mx-auto" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="img/ramos.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><a href="show_blog.php?id=" style="text-decoration: none; color: white;">Publicação 1</a></h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/ramos.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><a href="show_blog.php?id=" style="text-decoration: none; color: white;">Publicação 2</a></h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/ramos.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><a href="show_blog.php?id=" style="text-decoration: none; color: white;">Publicação 3</a></h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                            </div>
                        </div>
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
            </main>
        </div>

        <?php
        include_once 'footer.php';
        ?>
    </body>
</html>