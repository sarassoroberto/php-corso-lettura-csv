<?php
class ArticleList{

    public static function render($articleList,$template) {
        include "./view/parts/$template.php";
    }

}