<?php

require "functions.php";
require 'Database.php';

//require "router.php";

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = ?";

$posts = $db->query($query, [$id])->fetch();

//dd($query);

// Connect to MySQL database
dd($posts);

// foreach ($posts as $post) {
//   echo "<li>" . $post['title'] . "</li>";
// }

// class Person
// {
//   public $name;
//   public $age;

//   public function breathe()
//   {
//     echo $this->name . " is breathing";
//   }
// }

// $person = new Person();

// $person->name = "John Doe";
// $person->age = 24;

// $person->breathe();
