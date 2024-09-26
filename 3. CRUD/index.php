<?php
require_once 'config/connect.php';
require_once 'controllers/comment.php';

$controller = new CommentController($pdo);
$controller->addComment();
$comments = $controller->getComments();

include 'views/comments.php';
