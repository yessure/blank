<?php
define("INDEX_DIR", __DIR__ . DIRECTORY_SEPARATOR);
require(INDEX_DIR . "constants.php");
require(INDEX_DIR . "functions.php");
require(CLASS_DIR . "autoloader.php");

new Autoloader();
$injector = new Injector();
$t = $injector->createClass("TemplateEngine");
$t->loadTemplate("index");
echo $t->renderTemplate("index", array("there" => "world"));
