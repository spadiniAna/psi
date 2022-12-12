<?php

    include_once 'pag.class.php';

    if(isset($_POST['titulo']) && isset($_POST['txt']) && isset($_FILES['img'])){

        $img = new img();

        if(isset($_POST['id'])){

            $img->setId($_POST['id']);

        }

        $img->setTitulo($_POST['titulo']);
        $img->setTxt($_POST['txt']);
        $img->setImg($_FILES['img']);

        $img->inserir();

    }

    header('Location: ../frontend/pag_paciente.php');

