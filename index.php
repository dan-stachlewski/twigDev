<?php
//Autoloads all the libraries maintained by composer
require './vendor/autoload.php';

/***
 * If not using composer load libraries w below code:
require_once '/path/to/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
*/

//set up the twig object
$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, [
    'cache' => './cache',
    //will recompile everytime we run the file
    'debug' => true,
]);