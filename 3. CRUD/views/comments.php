<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
</head>

<body>
    <h1>Комментарии</h1>
    <!-- форма для отправки пользователем комментария -->
    <form method="post" action="">
        <input type="text" name="name" placeholder="Ваше имя" required>
        <textarea name="comment" placeholder="Ваш комментарий" required></textarea>
        <button type="submit">Добавить комментарий</button>
    </form>

    <h2>Список комментариев:</h2>
    <ul>
        <?php foreach ($comments as $comment): ?>
            <li>
                <strong><?php echo htmlspecialchars($comment['name']); ?></strong>:
                <?php echo htmlspecialchars($comment['comment']); ?>
                <em>(<?php echo $comment['created_at']; ?>)</em>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>