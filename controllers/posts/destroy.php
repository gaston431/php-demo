<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$post = $db->query('select * from posts where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($post['user_id'] === $currentUserId);
    
$db->query('delete from posts where id = :id', [
    'id' => $_POST['id']
]);

header('location: /posts');
exit();