<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD</title>
</head>

<body>
    <h1>Комментарии</h1>
    <!-- форма для отправки пользователем комментария -->
    <form method="post" action="" class="m-3">
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Ваше имя" required>
        </div>
        <div class="mb-3">
            <textarea name="comment" class="form-control" placeholder="Ваш комментарий" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Добавить комментарий</button>
    </form>

    <h2>Список комментариев:</h2>

    <?php foreach ($comments as $comment): ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($comment['name']); ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($comment['comment']); ?></p>
                <em>(<?php echo $comment['created_at']; ?>)</em>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>