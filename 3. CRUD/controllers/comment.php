<?php
require_once '../config/database.php';
require_once '../models/Comment.php';

class CommentController
{
    private $commentModel;

    public function __construct($mysqli)
    {
        $this->commentModel = new CommentModel($mysqli);
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $this->commentModel->addComment($name, $comment);
        }
    }

    public function index()
    {
        return $this->commentModel->getComments();
    }
}
