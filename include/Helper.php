<?php 
class Helper
{
    public static function redirect($controller,$action)
    {
        header ("Location: " . domain . "index.php?controller=$controller&action=$action");
    }

    public static function htmlRoute($controller,$action)
    {
        return "index.php?controller=$controller&action=$action" ;
    }
    public static function view($view)
    {
        require_once ('views/' .  $view .'.php');
    }

}
?>