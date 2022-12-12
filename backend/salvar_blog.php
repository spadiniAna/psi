<?php

    include_once 'blog.class.php';

    if(isset($_POST['titulo']) && isset($_POST['subtitulo']) && isset($_POST['texto']) && isset($_FILES['img'])){

        $blog = new blog();

        if(isset($_POST['id'])){

            $blog->setId($_POST['id']);

        }

        $blog->setTitulo($_POST['titulo']);
        $blog->setSubtitulo($_POST['subtitulo']);
        $blog->setTexto($_POST['texto']);
        $blog->setImg($_FILES['img']);

        $blog->inserir();

    }

   header('Location: ../frontend/blog.php');

