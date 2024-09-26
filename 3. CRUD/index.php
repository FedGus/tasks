<?php
require_once 'config/connect.php';
require_once 'controllers/comment.php';

$controller = new CommentController($mysqli);
$controller->add();
$comments = $controller->index();

include 'views/comments.php';

// Закрытие соединения с базой данных
$mysqli->close();
