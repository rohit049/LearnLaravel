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
            <h1><a href="post/<?= $post->slug; ?>"><?= $post->title; ?></a></h1>
            <div><?= $post->excerpt; ?></div>
        </article>
    <?php endforeach; ?>
</body>
</html>