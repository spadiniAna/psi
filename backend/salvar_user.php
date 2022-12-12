<?php

    include_once 'user.class.php';

    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nivel'])){

        $user = new user();

        if(isset($_POST['id'])){

            $user->setId($_POST['id']);

        }

        $user->setNome($_POST['nome']);
        $user->setEmail($_POST['email']);
        $user->setSenha($_POST['senha']);
        $user->setNivel($_POST['nivel']);

        $user->inserir();

    }

    header('Location: ../frontend/cadastro.php');

