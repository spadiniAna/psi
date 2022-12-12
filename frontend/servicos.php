<!DOCTYPE HTML>
<html lang="pt-br">
    <header>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <title>Serviços</title>
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
                            <h2 class="display-6" style="color: #458890; padding-left: 30px;">Serviços</h2>
                            <hr style="color: #458890;">
                        </div>
                        <div class="vstack gap-2"> 
                        <div class="card mb-1 col-7 mx-auto border-top-0 border-end-0 px-0" 
                        style="max-width: 100%; border-radius: 0; border-left: 1px solid #feb9b4; border-bottom: 1px solid #feb9b4;">
                            <div class="row g-0">
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #458890">Psicologia Clínica</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="img/psicologa.jpg" class="img-fluid" alt="...">
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-3 col-7 mx-auto border-top-0 border-start-0 px-0" 
                        style="max-width: 100%; border-radius: 0; border-right: 1px solid #feb9b4; border-bottom: 1px solid #feb9b4;">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="img/psicologa.jpg" class="img-fluid" style="border-radius: 0;" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body text-end">
                                        <h5 class="card-title" style="color: #458890" >Inteligência Emocional Bioflow</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
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
