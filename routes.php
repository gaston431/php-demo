<?php

/* return [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/posts' => 'controllers/posts/index.php',
    '/post' => 'controllers/posts/show.php',
    '/posts/create' => 'controllers/posts/create.php',
    '/contact' => 'controllers/contact.php',
]; */

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/posts', 'controllers/posts/index.php');
$router->get('/post', 'controllers/posts/show.php');
$router->delete('/post', 'controllers/posts/destroy.php');

$router->get('/post/edit', 'controllers/posts/edit.php');
$router->patch('/post', 'controllers/posts/update.php');

$router->get('/posts/create', 'controllers/posts/create.php');
$router->post('/posts', 'controllers/posts/store.php');