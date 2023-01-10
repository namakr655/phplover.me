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
            // get page content
            $content = file_get_contents($file_path);

            // get title
            $title = explode("title:", $content)[1];
            $title = explode("\n", $title)[0];
            $title = str_replace("-", " ", $title);
            $title = ucwords($title);
            $title = str_replace('"', "", $title);
            $title = trim($title);

            // get description
            $description = explode("description:", $content)[1];
            $description = explode("\n", $description)[0];
            $description = ucwords($description);
            $description = str_replace('"', "", $description);
            $description = trim($description);

            // get content
            $content = explode("---", $content)[2];
            $content = trim($content);

            // markdown parser
            $parser = new \League\CommonMark\CommonMarkConverter();

            // parse content
            $content = $parser->convert($content);

            // return view
            return view('documentation/show', [
                'title' => $title,
                'description' => $description,
                'content' => $content,
            ]);

        } else {
            return (new \Phplover\Libraries\Error)->notFound();
        }

    }

}