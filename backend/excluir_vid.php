<?php

    include_once 'pag.class.php';

    if(isset($_GET['id'])){
        
        $vid = new vid();

            $vid->setId($_GET['id']);

        $vid->excluir();

    }

    header("location: ../frontend/pag_paciente.php");