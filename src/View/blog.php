<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Blog</title>
</head>
<body>
    <h1>Blog Posts</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li><strong><?= htmlspecialchars($post['title']) ?></strong> - <?= htmlspecialchars($post['content']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
