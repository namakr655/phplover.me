<?php

namespace Phplover\Modules\Documentation\Controllers;

class Index
{

    public function index()
    {
        return redirect('/documentation/index', 301);
    }

    public function showPage(array $args)
    {
        // get slug
        $slug = $args[0];

        // file path
        $file_path = ROOTPATH . 'modules/Documentation/Contents/' . $slug . '.md';

        // check if page exists
        if (file_exists($file_path))
        {
            $contentFetcher = new \Phplover\Libraries\ContentFetcher();

            // fetch content
            $content = $contentFetcher->fetch($file_path);

            // return view
            return view('documentation/show', [
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