<?php
class CommentModel
{
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function addComment($name, $text) {
        $stmt = $this->pdo->prepare("INSERT INTO comments (user_name, comment_text) VALUES (:user_name, :comment_text)");
        $stmt->execute(['user_name' => $name, 'comment_text' => $text]);
    }

    public function getComments() {
        $stmt = $this->pdo->query("SELECT * FROM comments ORDER BY created_at ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
