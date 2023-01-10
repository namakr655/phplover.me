<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $this->e($title) ?></title>

    <meta name="description" content="<?= $this->e($description) ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('/assets/css/tailwind.css') ?>">

</head>
<body>

    <div class="container">
        <div class="p-6 w-11/12 md:w-3/4 my-6 mx-auto">
            <span class="text-2xl text-center underline underline-offset-4 decoration-blue-600"><a href="<?= base_url() ?>">PHPLover</a></span>

            <div class="prose md:prose-lg lg:prose-xl my-6 max-w-none">
                <?= $this->section('content') ?>
            </div>
        </div>
    </div>
    
</body>
</html>