<?php

    include_once 'pag.class.php';

    if(isset($_POST['titulo']) && isset($_POST['txt']) && isset($_FILES['vid'])){

        $vid = new vid();

        if(isset($_POST['id'])){

            $vid->setId($_POST['id']);

        }

        $vid->setTitulo($_POST['titulo']);
        $vid->setTxt($_POST['txt']);
        $vid->setVid($_FILES['vid']);

        $vid->inserir();

    }

    header('Location: ../frontend/pag_paciente.php');

