<?php

include '../backend/user.class.php';

if(isset($_GET['id'])){

  $user = new user();
  $user->setId($_GET['id']);

  $users = $user->listar();

  foreach($users as $u){

      $id = $u['id'];
      $nome = $u['nome'];
      $email = $u['email'];
      $senha = $u['senha'];
      $nivel = $u['nivel'];

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <title>Cadastro</title>
    </header>
    <body>
        <?php
        include_once 'header.php';
        ?>

        <div>
            <main>
                <div class="container" style="padding-top: 20px;">
                <div class="col-10 position-relative top-0 start-50 translate-middle-x">
                    <h2 class="display-6" style="color: #458890; padding-left: 30px;">Cadastro</h2>
                    <hr style="color: #458890;">
                    <div class="">
                        <form method="POST" action="../backend/salvar_user.php" style="border: 1px solid #feb9b4; padding: 50px; box-shadow: 5px 5px 10px #f4d1be;">
                        
                        <?php if(isset($id)){ ?>
                            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                        <?php } ?>

                        <div class="row">
                            <div class="col-9 form-floating mb-3">
                                <input class="form-control form-control-lg" type="text" id="nome" name="nome" placeholder="Nome" value="<?php if(isset($nome)){ echo $nome; } ?>" required/>
                                <label for="nome" class="form-label fw-light  ms-3">Nome</label>
                            </div>
                            <div class="col-3 form-floating mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nivel" id="paciente" value="paciente" checked>
                                    <label class="form-check-label" for="paciente">
                                        Paciente
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nivel" id="psi" value="psi">
                                    <label class="form-check-label" for="psi">
                                        Psicóloga
                                    </label>
                                </div>
                            </div>
                        </div>

                            <div class="form-floating mb-3">
                                <input class="form-control form-control-lg" type="email" id="email" name="email" placeholder="Email" value="<?php if(isset($email)){ echo $email; } ?>" required/>
                                <label for="email" class="form-label fw-light">Email</label>
                            </div>

                            <div class="row">
                            <div class="col form-floating mb-4">                                
                                <input class="form-control form-control-lg" type="password" name="senha" id="senha" placeholder="Senha" value="<?php if(isset($senha)){ echo $senha; } ?>" required/>
                                <label for="senha" class="form-label fw-light ms-3">Senha</label>
                            </div>

                            <div class="col form-floating mb-4">                                
                                <input class="form-control form-control-lg" type="password" name="c_senha" id="c_senha" placeholder="Confirme a senha" required/>
                                <label for="c_senha" class="form-label fw-light ms-3">Confirme a senha</label>
                            </div>
                            </div>

                            <div style="text-align: center;">
                                <input class="btn" type="submit" id="login" value="Cadastrar"
                                style="background-color: #79b5af; color: white; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px;"/>
                            </div>
                        </form>
                        <script>
                            $(function(){
                            $("#login").click(function(){
                                var senha = $("#senha").val();
                                var c_senha = $("#c_senha").val();
                                if(senha != c_senha){
                                event.preventDefault();
                                alert("As senhas não coincidem!");
                                }
                            });
                            });
                        </script>
                    </div>
                    <br>
                    <div class="">
                    <h2 class="display-6 mt-5" style="color: #458890; padding-left: 30px;">Pacientes</h2>
                    <hr style="color: #458890;">
                    <table class="table table-bordered text-center" style="border: 1px solid #feb9b4;">
                        <thead class="opacity-75" style="background-color: #feb9b4; color: white;">
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Página</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                            <tr>
                                <?php 
                                $user = new user();

                                $pacientes = $user->listar();

                                foreach($pacientes as $paciente){
                                ?>
                                <td><?php echo $paciente['nome']; ?></td>
                                <td><a href="mailto:<?php echo $paciente['email']; ?>" style="color: black; text-decoration: none;"><?php echo $paciente['email']; ?></a></td>
                                <td><a href="pag_paciente.php?id=<?php echo $paciente['id']; ?>" style="color: black; text-decoration: none;">página</td>
                                <td>
                                    <button type="button" onclick="editar('<?php echo $paciente['id']; ?>')" class="btn" style="background-color: #79b5af; color: white;">Editar</button>
                                    <button type="button" onclick="excluir('<?php echo $paciente['id']; ?>')" class="btn" style="background-color: #79b5af; color: white;">Excluir</button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
                </div>
                
            </main>
        </div>

        <?php
        include_once 'footer.php';
        ?>

        
    <script>

        function excluir(n){

            let text = "Realmente deseja excluir?";
            if (confirm(text) == true){
                window.location = '../backend/excluir_user.php?id=' + n;
            }
        }

        function editar(n){

            window.location = 'cadastro.php?id=' + n; 
        }

    </script>

    </body>
</html>
