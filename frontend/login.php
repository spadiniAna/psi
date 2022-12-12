<?php

    if(isset($_SESSION['logado'])){

        if($_SESSION['logado'] === true){

            header('location: index.php');

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

        <title>Login</title>
    </header>
    <body>
        <?php
        include_once 'header.php';
        ?>

        <div>
            <main>
                <div class="container" style="padding-top: 20px;">
                <div class="col-10 position-relative top-0 start-50 translate-middle-x">
                    <h2 class="display-6" style="color: #458890; padding-left: 30px;">Login</h2>
                    <hr>
                    <div class="">
                        <form method="POST" action="../backend/verificar.php" style="border: 1px solid #feb9b4; padding: 50px; box-shadow: 5px 5px 10px #f4d1be;">
                            
                            <?php if(isset($id)){ ?>
                            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                            <?php } ?>

                            <div class="form-floating mb-3">
                                <input class="form-control form-control-lg" type="email" id="email" name="email" placeholder="Email" required/>
                                <label for="email" class="form-label fw-light">Email</label>
                            </div>

                            <div class="form-floating mb-4">                                
                                <input class="form-control form-control-lg" type="password" name="senha" id="senha" placeholder="Senha" required/>
                                <label for="senha" class="form-label fw-light">Senha</label>
                            </div>

                            <div style="text-align: center;">
                                <input class="btn" type="submit" id="login" value="Entrar"
                                style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;"/>
                            </div>

                        </form>
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
