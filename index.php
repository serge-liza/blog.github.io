
<?php

    require_once("database.php");//файл для работы с БД
    require_once("models/articles_models.php");//файл функций для работы со статьями
    
    $link = db_connect();
    $articles = articles_all($link);
    
    include("views/articles_view.php");//вид, в котором будут выводиться статьи

?>
