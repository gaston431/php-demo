<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

// find the corresponding post
$post = $db->query('select * from posts where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// authorize that the current user can edit the post
authorize($post['user_id'] === $currentUserId);

// validate the form
$errors = [];

if (! Validator::string($_POST['title'], 1, 1000)) {
    $errors['title'] = 'A body of no more than 1,000 characters is required.';
}

// if no validation errors, update the record in the posts database table.
if (count($errors)) {
    return view('posts/edit.view.php', [
        'heading' => 'Edit Post',
        'errors' => $errors,
        'post' => $post
    ]);
}

$db->query('update posts set title = :title where id = :id', [
    'id' => $_POST['id'],
    'title' => $_POST['title']
]);

// redirect the user
header('location: /posts');
die();