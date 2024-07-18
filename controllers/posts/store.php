<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

if (! Validator::string($_POST['title'], 1, 1000)) {
    $errors['title'] = 'A body of no more than 1,000 characters is required.';
}

if (! empty($errors)) {
    return view("posts/create.view.php", [
        'heading' => 'Create Post',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO posts(title, user_id) VALUES(:title, :user_id)', [
    'title' => $_POST['title'],
    'user_id' => 1
]);

header('location: /posts');
die();