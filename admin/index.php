<?php
    require_once ("../datebase.php");
    require_once ("../models/articles.php");

    $link = db_connect();

    if(isset($_GET['action']))
        $action = $_GET['action'];

    else
        $action = "";

    if ($action == "add"){

        if(!empty($_POST)){
            article_new($link,$_POST['title'],$_POST['date'],$_POST['content']);
            header("Location: index.php");
        }
        include ("../views/article_admin.php");
    }

    else if($action == "edit"){

        $link = db_connect();

        if(!isset($_GET['id']))
            header("Location: index.php");

        $id = (int)$_GET['id'];

        if(!empty($_POST) && $id > 0){
            article_edit($link,$id,$_POST['title'],$_POST['date'],$_POST['content']);
            header("Location: index.php");
        }
        $article = articles_get($link,$id);
        include ("../views/article_admin.php");
    }

    else if($action == "delete"){
        $id = $_GET['id'];
        $article = article_delete($link, $id);
        header("Location: index.php");
    }

    else{
        $articles = articles_all($link);
        include ("../views/articles_admin.php");
    }

?>