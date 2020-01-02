<?php
class ArticleList{

    public static function render($setting) {
        $template = $setting['view'];
        
        include "./view/parts/$template.php";
    }

    public static function articleDetailUrl($index){
        return "controller=dettaglio&id=$index";
    }

}
