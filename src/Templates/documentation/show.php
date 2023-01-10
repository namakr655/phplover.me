<?php $this->layout('layouts/base', [
    'title' => $title,
    'description' => $description,
    'slug' => $slug,
]); ?>

<div class="not-prose my-10">
    <a href="<?= base_url() ?>" class="bg-blue-600 rounded px-4 py-2 text-white">&larr; Back to Docs INDEX</a>
</div>

<h1><?= $this->e($title) ?></h1>

<?= $content ?>