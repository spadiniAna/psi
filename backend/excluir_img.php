<?php

    include_once 'pag.class.php';

    if(isset($_GET['id'])){
        
        $img = new img();

            $img->setId($_GET['id']);

        $img->excluir();

    }

    header("location: ../frontend/pag_paciente.php");