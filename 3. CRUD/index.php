<?php
require_once 'config/connect.php';
require_once 'controllers/comment.php';

$controller = new CommentController($mysqli);
$controller->addComment();
$comments = $controller->getComments();

include 'views/comments.php';

// Закрытие соединения с базой данных
$mysqli->close();
