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

//Define variables from the index.html.twig template
$heading = "Its all about the TWIG Templates!";
$name = "Daniel Stachlewski";

//Render method loads the template passed as 1st arg & renders it w vars passed as 2nd arg
echo $twig->render('index.html.twig', array('name' => $name, 'heading' => $heading));
//How to echo a template that doesn't have any variables set
//echo $twig->render('template.html.twig', []);