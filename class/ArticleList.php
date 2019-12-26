<?php
class ArticleList{

    public static function render($setting) {
        $template = $setting['view'];
        
        include "./view/parts/$template.php";
    }

}