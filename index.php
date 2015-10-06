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
//Example 1 - using index.html.twig template
$heading = "Its all about the TWIG Templates!";
$name = "Daniel Stachlewski";

//Render method loads the template passed as 1st arg & renders it w vars passed as 2nd arg
echo $twig->render('index.html.twig', array('name' => $name, 'heading' => $heading));
//How to echo a template that doesn't have any variables set
//echo $twig->render('template.html.twig', []);

//Define variables from the index.html.twig template
/* Example 2 - using person.html.twig template & complex data structure
 * (from JSON Wiki example)
 * $person = ["key" => "value"]; PHP ASSOC/ARRAY Syntax as of V5.4
 */
$person = [
    "firstName"=>"John",
    "lastName"=>"Smith",
    "isAlive"=>true,
    "age"=>25,
    "address"=>[
        "streetAddress"=>"21 2nd Street",
        "city"=>"New York",
        "state"=>"NY",
        "postalCode"=>"10021-3100",
    ],
    "phoneNumbers"=>[
        0=>[
            "type"=>"home",
            "number"=>"212 555-1234",
        ],
        1=>[
            "type"=>"office",
            "number"=>"646 555-4567",
        ]
    ],
    "children"=>[],
    "spouse"=>NULL
];

//Render method loads the template passed as 1st arg & renders it w vars passed as 2nd arg
echo $twig->render('person.html.twig', $person);

//Define variables from the index.html.twig template
/* Example 3 - using person.html.twig template & complex data structure
 * (from JSON Wiki example)
 * If you are having trouble w working out the array syntax you can cheat by
 * using json_decode() function and var_dump($var) & it will print out the
 * array, assoc/array syntax correctly
 * Just copy paste and edit the code and done!!
 * $person = ["key" => "value"]; PHP ASSOC/ARRAY Syntax as of V5.4
 */
$person = json_decode('{
  "firstName": "John",
  "lastName": "Smith",
  "isAlive": true,
  "age": 25,
  "address": {
    "streetAddress": "21 2nd Street",
    "city": "New York",
    "state": "NY",
    "postalCode": "10021-3100"
  },
  "phoneNumbers": [
    {
      "type": "home",
      "number": "212 555-1234"
    },
    {
      "type": "office",
      "number": "646 555-4567"
    }
  ],
  "children": [],
  "spouse": null
}', true);
echo "<pre>";
var_dump($person);
echo "</pre>";