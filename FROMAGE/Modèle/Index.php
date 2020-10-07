<?php

use FROMAGE\ClassM\{
    Autoloader,
    Fromage,
    Pays
};


require 'ClassM/autoloader.php';

Autoloader::register();
$pays = new pays(3, 'Allemagne');
$fromage = new fromage(1,3,'Compté', 1463, '');

echo $fromage->chance();