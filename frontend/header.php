<?php

    include '../backend/login.class.php';
  
    if(!isset($_SESSION['logado'])){
      $_SESSION['logado'] = false;

  }

?>

<div class="container">
    <div style="background-color: white;">
        <img src="img/logo.png" alt="logo" style="width: 60%;">
    </div>
    <nav class="navbar navbar-expand-lg" style="background-color: #9cd4cc;">
        <div class="container-fluid collapse navbar-collapse navbar-nav" style="padding-left: 100px; padding-right: 100px;">

            <div class="nav-item">
                <a class="nav-link text-light" href="index.php">Página inicial</a>
            </div>
            <div class="vr text-light"></div>

            <div class="nav-item">
                <a class="nav-link text-light" href="servicos.php">Serviços</a>
            </div>
            <div class="vr text-light"></div>

            <div class="nav-item">
                <a class="nav-link text-light" href="blog.php">Publicações</a>
            </div>
            <div class="vr text-light"></div>

            <div class="nav-item">
                <a class="nav-link text-light" href="contato.php">Contato</a>
            </div>
            <div class="vr text-light"></div>

            <?php   if(isset($_SESSION['logado'])){
                if($_SESSION['logado'] === true){ ?>

            <div class="nav-item">
                <a class="nav-link text-light" href="pag_paciente.php">Minha página</a>
            </div>
            <div class="vr text-light"></div>

            <?php }
              if($_SESSION['logado'] === false){ ?>
            <div class="nav-item">
                <a class="nav-link text-light" href="login.php">Login</a>
            </div>

            <?php 
            } elseif($_SESSION['logado'] === true){ ?>
            <div class="nav-item">
                <a class="nav-link text-light" href="../backend/logout.php">Sair</a>
            </div>

            <?php  
            
            if(isset($_SESSION['adm'])){
                if($_SESSION['adm'] === true){
                    ?>
            <div class="vr text-light"></div>
            <div class="nav-item">
                <a class="nav-link text-light" href="cadastro.php">Cadastrar</a>
            </div>

                <?php
                }}}}
                ?>
        </div>

    </nav>
</div>