<?php
class CommentModel
{
    private $mysqli;

    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function addComment($name, $comment)
    {
        $stmt = $this->mysqli->prepare("INSERT INTO comments (name, comment) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $comment);
        $stmt->execute();
        $stmt->close();
    }

    public function getComments()
    {
        $result = $this->mysqli->query("SELECT * FROM comments ORDER BY created_at DESC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
