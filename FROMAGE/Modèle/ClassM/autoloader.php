<?php


namespace FROMAGE\ClassM;


class Autoloader
{
     static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
        function autoload($class_name)
        {
            $file = str_replace('Modèle\ClassM','',$class_name);
            $file = 'C:\Bitnami\wampstack-7.4.6-1\apps\ClassPHP\htdocs\FROMAGE' . $file . '.php';
            if(file_exists($file)) {
                return require $file;
            }
        }
}