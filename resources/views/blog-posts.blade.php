<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sam Bell's Portfolio</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>

<body>
    <?php foreach ($posts as $post) : ?>
    <article>
        <h2>
            <a href="/blog/<?= $post->slug; ?>">
                <?= $post->title; ?>
            </a>
        </h2>

        <div>
            <?= $post->excerpt; ?>
        </div>
    </article>
    <?php endforeach; ?>
</body>
