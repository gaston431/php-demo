<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'My Posts';

$posts = $db->query('select * from posts where user_id = 1')->get();

require "views/posts/index.view.php";