<?php

require_once 'post_handler.php';

$posthandler = new PostHandler();

$method = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['REQUEST_URI'];

if ($method == 'POST' && $url == '/add-post') {
    $posthandler->addPost($_POST['title'], $_POST['content']);
} elseif ($method == 'GET' && $url == '/list-posts') {
    $posthandler->postCheck();  // Use $posthandler here
} else {
    echo "404 Not Found";
}

$posthandler->postCheck();
?>