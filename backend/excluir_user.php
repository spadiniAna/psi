<?php

    include_once 'user.class.php';

    if(isset($_GET['id'])){
        
        $user = new user();

            $user->setId($_GET['id']);

        $user->excluir();

    }

    header("location: ../frontend/cadastro.php");