<?php
require_once '../config/connect.php';
require_once '../models/comment.php';

class CommentController
{
    private $commentModel;

    public function __construct($mysqli)
    {
        $this->commentModel = new CommentModel($mysqli);
    }

    public function addComment()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $this->commentModel->addComment($name, $comment);
        }
    }

    public function getComments()
    {
        return $this->commentModel->getComments();
    }
}
