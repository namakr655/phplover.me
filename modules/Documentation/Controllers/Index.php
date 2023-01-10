<?php

namespace Phplover\Modules\Documentation\Controllers;

class Index
{

    public function index()
    {
        echo "Documentation";
    }

    public function showPage(array $args)
    {
        $slug = $args[0];
        echo $slug;
    }

}