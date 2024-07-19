
<?php

//require 'functions.php';
//require 'Database.php';
//require 'Response.php';
//require 'router.php';

use Core\Session;
use Core\ValidationException;

const BASE_PATH = __DIR__.'/../';

session_start();

require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH.'Core/functions.php';

/* spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
}); */

require base_path('bootstrap.php');

$router = new \Core\Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);

    return redirect($router->previousUrl());
}

Session::unflash();

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