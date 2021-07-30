<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Brand New Blog Site</title>
    <link rel="stylesheet" type="text/css" href="/app.css">
</head>
<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post ?>
        </article>
    <?php endforeach; ?>
</body>
</html>