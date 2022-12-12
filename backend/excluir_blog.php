<?php

    include_once 'blog.class.php';

    if(isset($_GET['id'])){
        
        $blog = new blog();

            $blog->setId($_GET['id']);

        $blog->excluir();

    }

    header("location: ../frontend/blog.php");