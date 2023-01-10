<?php $this->layout('layouts/base', [
    'title' => $title,
    'description' => $description,
    'slug' => $slug,
]); ?>

<h1><?= $this->e($title) ?></h1>

<?= $content ?>