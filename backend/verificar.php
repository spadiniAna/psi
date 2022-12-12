<?php

    require 'login.class.php';
    
    if(isset($_POST['email']) && isset($_POST['senha'])){

        $login = new login();

        $login->setEmail($_POST['email']);
        $login->setSenha($_POST['senha']);

        if($login->verificar()){

            header('location: ../frontend/index.php');

        }else{

            header('location: ../frontend/login.php');

        }

    }