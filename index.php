
<?php

require 'functions.php';
require 'Database.php';
require 'Response.php';
require 'router.php';
//connect to database

/*$config = require 'config.php';
$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = :id";

$post = $db->query($query,['id' => $id])->fetch();

dd($post);

foreach ($posts as $post) {
    echo '<li>'. $post['title'] . "</li>";
}*/