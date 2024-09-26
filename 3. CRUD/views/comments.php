<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>CRUD</title>
</head>

<body class="content">
    <h1>Комментарии</h1>
    <!-- форма для отправки пользователем комментария -->
    <form method="post" action="" class="form">
            <input type="text" class="form-control" name="user_name" placeholder="Ваше имя" required>
            <textarea name="comment_text" class="form-control" placeholder="Ваш комментарий" required></textarea>
        <button type="submit" class="btn">Добавить комментарий</button>
    </form>

    <h2>Список комментариев:</h2>
<div class="comments-list">
    <?php foreach ($comments as $comment): ?>
        <div class="card">
            <div class="card-body">
                <div class="card-title"><?php echo htmlspecialchars($comment['user_name']); ?></div>
                <p class="card-text"><?php echo htmlspecialchars($comment['comment_text']); ?></p>
                <div class="card-caption">(<?php echo $comment['created_at']; ?>)</div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</body>

</html>