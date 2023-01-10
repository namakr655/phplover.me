<?php $this->layout('layouts/base', [
    'title' => $title,
    'description' => $description,
]); ?>

<h1><?= $this->e($title) ?></h1>

<?= $content ?>