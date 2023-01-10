<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title) ?></title>

    <meta name="description" content="<?= $this->e($message) ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('/assets/css/tailwind.css') ?>">

</head>
<body>

    <!-- error page designed with tailwind css-->
    <div class="flex flex-col items-center justify-center min-h-screen py-2 bg-gray-100 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-center w-full space-y-8">
            <div class="flex flex-col items-center justify-center space-y-2">
                <div class="text-9xl font-bold text-gray-500">404</div>
                <div class="text-2xl font-bold text-gray-500">Page Not Found</div>
            </div>
            <div class="flex flex-col items-center justify-center space-y-2">
                <div class="text-lg font-medium text-gray-500">The page you are looking for does not exist.</div>
                <div class="text-lg font-medium text-gray-500">You may have mistyped the address or the page may have moved.</div>
            </div>
            <div class="flex flex-col items-center justify-center space-y-2">
                <a href="/" class="px-4 py-2 text-lg font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600">Go to Home</a>
            </div>
        </div>
    </div>
    
</body>
</html>