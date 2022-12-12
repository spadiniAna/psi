<?php

    include_once 'pag.class.php';

    if(isset($_GET['id'])){
        
        $pag = new pag();

            $pag->setId($_GET['id']);

        $pag->excluir();

    }

    header("location: ../frontend/pag_paciente.php");