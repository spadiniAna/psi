<?php

    include_once 'pag.class.php';

    if(isset($_POST['titulo']) && isset($_POST['txt'])){

        $pag = new pag();

        if(isset($_POST['id'])){

            $pag->setId($_POST['id']);

        }

        $pag->setTitulo($_POST['titulo']);
        $pag->setTxt($_POST['txt']);

        $pag->inserir();

    }

    header('Location: ../frontend/pag_paciente.php');

