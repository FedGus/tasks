<?php
require_once 'config/connect.php';
require_once 'models/comment.php';

class CommentController
{
    private $commentModel;

    public function __construct($pdo)
    {
        $this->commentModel = new CommentModel($pdo);
    }

    public function addComment()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['user_name'];
            $text = $_POST['comment_text'];
            $this->commentModel->addComment($name, $text);
        }
    }

    public function getComments()
    {
        return $this->commentModel->getComments();
    }
}
