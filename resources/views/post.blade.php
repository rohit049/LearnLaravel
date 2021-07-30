<head>
    <meta charset="utf-8">
    <title>Brand New Blog Site</title>
    <link rel="stylesheet" type="text/css" href="/app.css">
</head>
<body>
	<br><br>
    <a href="/">Home</a>

	 <article>
        <h1><?= $post->title; ?></h1>
	 	<div><?= $post->body; ?></div>
    </article>

    <a href="/posts">&larr;Go Back</a>

</body>