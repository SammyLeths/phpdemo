<?php

//$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

//dd($uri);

// if ($uri === '/demo/') {
//   require 'controllers/index.php';
// } else if ($uri === '/demo/about') {
//   require 'controllers/about.php';
// } else if ($uri === '/demo/contact') {
//   require 'controllers/contact.php';
// }

$routes = [
  "/demo/" => "controllers/index.php",
  "/demo/about" => "controllers/about.php",
  "/demo/contact" => "controllers/contact.php",
];
function routeToController($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abort();
  }
}
function abort($code = 404)
{
  http_response_code($code);

  require "views/{$code}.php";

  die();
}

routeToController($uri, $routes);
