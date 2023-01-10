<?php

namespace Phplover\Modules\Pages\Controllers;

class Index
{

    public function showPage(array $args)
    {
        $slug = $args[0];
        
        $file_path = ROOTPATH . 'modules/Pages/Contents/' . $slug . '.md';

        if (file_exists($file_path))
        {
            $contentFetcher = new \Phplover\Libraries\ContentFetcher();

            $content = $contentFetcher->fetch($file_path);

            return view('pages/show', [
                'title' => $content['title'],
                'description' => $content['description'],
                'content' => $content['content'],
                'slug' => $content['slug']
            ]);

        } else {
            return (new \Phplover\Libraries\Error)->notFound();
        }
    }

}